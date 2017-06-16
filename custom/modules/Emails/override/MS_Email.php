<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Emails/Email.php');

require_once('custom/modules/Emails/override/MS_OutboundEmailConfigurationPeer.php');

class MS_Email extends Email
{

    private $MockMailerFactoryClass = 'MailerFactory';

    /**
     * Sends Email for Email 2.0
     */
    function email2Send($request)
    {
        global $current_user;
        global $timedate;

        // The fully constructed MIME message -- the email as it was transmitted to the mail server, complete with
        // headers and message parts -- is stored in this variable to allow the caller to choose to do something with
        // original content that was delivered.
        $sentMessage = null;

        $saveAsDraft = !empty($request['saveDraft']);
        if (!$saveAsDraft && !empty($request["MAIL_RECORD_STATUS"]) && $request["MAIL_RECORD_STATUS"] == 'archived') {
            $archived = true;
            $this->type = 'archived';
        } else {
            $archived = false;
            if (!empty($request['MAIL_RECORD_STATUS']) && $request['MAIL_RECORD_STATUS'] === 'ready') {
                $this->type = 'out';
            }
        }

        /**********************************************************************
         * Sugar Email PREP
         */
        /* preset GUID */

        $orignialId = "";
        if (!empty($this->id)) {
            $orignialId = $this->id;
        } // if

        if (empty($this->id)) {
            $this->id = create_guid();
            $this->new_with_id = true;
        }

        /* satisfy basic HTML email requirements */
        $this->name = $request['sendSubject'];

        if (isset($_REQUEST['setEditor']) && $_REQUEST['setEditor'] == 1) {
            $_REQUEST['description_html'] = $_REQUEST['sendDescription'];
            $this->description_html = $_REQUEST['description_html'];
        } else {
            $this->description_html = '';
            $this->description = $_REQUEST['sendDescription'];
        }

        if ($this->isDraftEmail($request)) {
            if ($this->type != 'draft' && $this->status != 'draft') {
                $this->id = create_guid();
                $this->new_with_id = true;
                $this->date_entered = "";
            } // if
            $q1 = "update emails_email_addr_rel set deleted = 1 WHERE email_id = '{$this->id}'";
            $this->db->query($q1);
        } // if

        if ($saveAsDraft) {
            $this->type = 'draft';
            $this->status = 'draft';
        } else {

            if ($archived) {
                $this->type = 'archived';
                $this->status = 'archived';
            }

            /* Apply Email Templates */
            // do not parse email templates if the email is being saved as draft....
            $toAddresses = $this->email2ParseAddresses($_REQUEST['sendTo']);
            $sea = BeanFactory::getBean('EmailAddresses');
            $object_arr = array();

            if (!empty($_REQUEST['parent_type']) && !empty($_REQUEST['parent_id']) &&
                ($_REQUEST['parent_type'] == 'Accounts' ||
                    $_REQUEST['parent_type'] == 'Contacts' ||
                    $_REQUEST['parent_type'] == 'Leads' ||
                    $_REQUEST['parent_type'] == 'Users' ||
                    $_REQUEST['parent_type'] == 'Prospects')
            ) {
                $bean = BeanFactory::getBean($_REQUEST['parent_type'], $_REQUEST['parent_id']);
                if (!empty($bean->id)) {
                    $object_arr[$bean->module_dir] = $bean->id;
                }
            }
            foreach ($toAddresses as $addrMeta) {
                $addr = $addrMeta['email'];
                $beans = $sea->getBeansByEmailAddress($addr);
                if (count($beans) == 1) {
                    if (!isset($object_arr[$beans[0]->module_dir])) {
                        $object_arr[$beans[0]->module_dir] = $beans[0]->id;
                    }
                } else {
                    foreach ($beans as $bean) {
                        if (!isset($object_arr[$bean->module_dir]) &&
                            !empty($addrMeta['display']) && $addrMeta['display'] == $bean->name
                        ) {
                            $object_arr[$bean->module_dir] = $bean->id;
                            break;
                        }
                    }
                }
            }

            if ($this->type != 'archived') {
                /* template parsing */
                if (empty($object_arr)) {
                    $object_arr = array('Contacts' => '123');
                }
                $object_arr['Users'] = $current_user->id;
                $this->description_html = EmailTemplate::parse_template($this->description_html, $object_arr);
                $this->name = EmailTemplate::parse_template($this->name, $object_arr);
                $this->description = EmailTemplate::parse_template($this->description, $object_arr);
            }

            $this->description = html_entity_decode($this->description, ENT_COMPAT, 'UTF-8');

            if ($this->type != 'draft' && $this->status != 'draft' &&
                $this->type != 'archived' && $this->status != 'archived'
            ) {
                $this->id = create_guid();
                $this->date_entered = "";
                $this->new_with_id = true;
                $this->type = 'out';
                $this->status = 'sent';
            }
        }

        // Register the Email so it can be used in relationship logic hooks even before it is saved. As recommended by
        // BeanFactory::registerBean, this is done once the object has an ID. It just so happens that the ID could have
        // been set up to 3 times prior to this point. So this is done as late as possible -- after the last potential
        // opportunity to set the ID and before the first opportunity to use the object in a logic hook.
        BeanFactory::registerBean($this);

        if (isset($_REQUEST['parent_type']) && empty($_REQUEST['parent_type']) &&
            isset($_REQUEST['parent_id']) && empty($_REQUEST['parent_id'])
        ) {
            $this->parent_id = "";
            $this->parent_type = "";
        } // if

        $forceSave = false;
        $subject = $this->name;
        $textBody = from_html($this->description);
        $htmlBody = from_html($this->description_html);

        //------------------- HANDLEBODY() ---------------------------------------------
        if ((isset($_REQUEST['setEditor']) /* from Email EditView navigation */
                && $_REQUEST['setEditor'] == 1
                && trim($_REQUEST['description_html']) != '')
            || trim($this->description_html) != '' /* from email templates */
            && $current_user->getPreference('email_editor_option',
                'global') !== 'plain' //user preference is not set to plain text
        ) {
            $textBody = strip_tags(br2nl($htmlBody));
        } else {
            // plain-text only
            $textBody = str_replace("&nbsp;", " ", $textBody);
            $textBody = str_replace("</p>", "</p><br />", $textBody);
            $textBody = strip_tags(br2nl($textBody));
            $textBody = html_entity_decode($textBody, ENT_QUOTES, 'UTF-8');

            $this->description_html = ""; // make sure it's blank to avoid any mishaps
            $htmlBody = $this->description_html;
        }

        $textBody = $this->decodeDuringSend($textBody);
        $htmlBody = $this->decodeDuringSend($htmlBody);
        $this->description = $textBody;
        $this->description_html = $htmlBody;

        $mailConfig = null;
        if (!$saveAsDraft && !$archived) {
            if (isset($request["fromAccount"]) && !empty($request["fromAccount"])) {

                // 'fromAccount' should be valid OE id, but it will not have 'from' email and
                // address set. 'from' data from related target list will be passed
                $from_data = array(
                    'msFromAddress' => $request['msFromAddress'],
                    'msFromName' => $request['msFromName']
                );

                $mailConfig = MS_OutboundEmailConfigurationPeer::getMailConfigurationFromId($current_user, $from_data);
            } else {
                $mailConfig = MS_OutboundEmailConfigurationPeer::getSystemMailConfiguration($current_user);
            }

            if (is_null($mailConfig)) {
                throw new MailerException("No Valid Mail Configurations Found", MailerException::InvalidConfiguration);
            }
        }

        try {
            $mailer = null;
            if (!$saveAsDraft && !$archived) {
                $mailerFactoryClass = $this->MockMailerFactoryClass;
                $mailer = $mailerFactoryClass::getMailer($mailConfig);
                $mailer->setSubject($subject);
                $mailer->setHtmlBody($htmlBody);
                $mailer->setTextBody($textBody);

                $replyTo = $mailConfig->getReplyTo();
                if (!empty($replyTo)) {
                    $replyToEmail = $replyTo->getEmail();
                    if (!empty($replyToEmail)) {
                        $mailer->setHeader(
                            EmailHeaders::ReplyTo,
                            new EmailIdentity($replyToEmail, $replyTo->getName())
                        );
                    }
                }
            }

            if (!is_null($mailer)) {
                // Any individual Email Address that is not valid will be logged and skipped
                // If all email addresses in the request are skipped, an error "No Recipients" is reported for the request
                foreach ($this->email2ParseAddresses($request['sendTo']) as $addr_arr) {
                    try {
                        $mailer->addRecipientsTo(new EmailIdentity($addr_arr['email'], $addr_arr['display']));
                    } catch (MailerException $me) {
                        // Invalid Email Address - Log it and Skip
                        $GLOBALS["log"]->warning($me->getLogMessage());
                    }
                }

                foreach ($this->email2ParseAddresses($request['sendCc']) as $addr_arr) {
                    try {
                        $mailer->addRecipientsCc(new EmailIdentity($addr_arr['email'], $addr_arr['display']));
                    } catch (MailerException $me) {
                        // Invalid Email Address - Log it and Skip
                        $GLOBALS["log"]->warning($me->getLogMessage());
                    }
                }

                foreach ($this->email2ParseAddresses($request['sendBcc']) as $addr_arr) {
                    try {
                        $mailer->addRecipientsBcc(new EmailIdentity($addr_arr['email'], $addr_arr['display']));
                    } catch (MailerException $me) {
                        // Invalid Email Address - Log it and Skip
                        $GLOBALS["log"]->warning($me->getLogMessage());
                    }
                }
            }

            /* handle attachments */
            if (!empty($request['attachments'])) {
                $exAttachments = explode("::", $request['attachments']);

                foreach ($exAttachments as $file) {
                    $file = trim(from_html($file));
                    $file = str_replace("\\", "", $file);
                    if (!empty($file)) {
                        $fileGUID = preg_replace('/[^a-z0-9\-]/', "", substr($file, 0, 36));
                        $fileLocation = $this->et->userCacheDir . "/{$fileGUID}";
                        $filename = substr($file, 36,
                            strlen($file)); // strip GUID	for PHPMailer class to name outbound file

                        // only save attachments if we're archiving or drafting
                        if ((($this->type == 'draft') && !empty($this->id)) || (isset($request['saveToSugar']) && $request['saveToSugar'] == 1)) {
                            $note = new Note();
                            $note->id = create_guid();
                            $note->new_with_id = true; // duplicating the note with files
                            $note->parent_id = $this->id;
                            $note->parent_type = $this->module_dir;
                            $note->name = $filename;
                            $note->filename = $filename;
                            $note->file_mime_type = $this->email2GetMime($fileLocation);
                            $note->team_id = (isset($_REQUEST['primaryteam']) ? $_REQUEST['primaryteam'] : $current_user->getPrivateTeamID());
                            $noteTeamSet = new TeamSet();
                            $noteteamIdsArray = (isset($_REQUEST['teamIds']) ? explode(",",
                                $_REQUEST['teamIds']) : array($current_user->getPrivateTeamID()));
                            $note->team_set_id = $noteTeamSet->addTeams($noteteamIdsArray);
                            $dest = "upload://{$note->id}";

                            if (!file_exists($fileLocation) || (!copy($fileLocation, $dest))) {
                                $GLOBALS['log']->debug("EMAIL 2.0: could not copy attachment file to $fileLocation => $dest");
                            } else {
                                $note->save();
                                $validNote = true;
                            }
                        } else {
                            $note = new Note();
                            $validNote = (bool)$note->retrieve($fileGUID);
                        }

                        if (isset($validNote) && $validNote === true) {
                            $attachment = AttachmentPeer::attachmentFromSugarBean($note);
                            if (!is_null($mailer)) {
                                $mailer->addAttachment($attachment);
                            }
                        }
                    }
                }
            }

            /* handle sugar documents */
            if (!empty($request['documents'])) {
                $exDocs = explode("::", $request['documents']);

                foreach ($exDocs as $docId) {
                    $docId = trim($docId);
                    if (!empty($docId)) {
                        $doc = new Document();
                        $doc->retrieve($docId);

                        if (empty($doc->id) || $doc->id != $docId) {
                            throw new Exception("Document Not Found: Id='" . $request['documents'] . "'");
                        }

                        $documentRevision = new DocumentRevision();
                        $documentRevision->retrieve($doc->document_revision_id);
                        //$documentRevision->x_file_name   = $documentRevision->filename;
                        //$documentRevision->x_file_path   = "upload/{$documentRevision->id}";
                        //$documentRevision->x_file_exists = (bool) file_exists($documentRevision->x_file_path);
                        //$documentRevision->x_mime_type   = $documentRevision->file_mime_type;

                        $filename = $documentRevision->filename;
                        $docGUID = preg_replace('/[^a-z0-9\-]/', "", $documentRevision->id);
                        $fileLocation = "upload://{$docGUID}";

                        if (empty($documentRevision->id) || !file_exists($fileLocation)) {
                            throw new Exception("Document Revision Id Not Found");
                        }

                        // only save attachments if we're archiving or drafting
                        if ((($this->type == 'draft') && !empty($this->id)) || (isset($request['saveToSugar']) && $request['saveToSugar'] == 1)) {
                            $note = new Note();
                            $note->id = create_guid();
                            $note->new_with_id = true; // duplicating the note with files
                            $note->parent_id = $this->id;
                            $note->parent_type = $this->module_dir;
                            $note->name = $filename;
                            $note->filename = $filename;
                            $note->file_mime_type = $documentRevision->file_mime_type;
                            $note->team_id = $this->team_id;
                            $note->team_set_id = $this->team_set_id;
                            $dest = "upload://{$note->id}";
                            if (!file_exists($fileLocation) || (!copy($fileLocation, $dest))) {
                                $GLOBALS['log']->debug("EMAIL 2.0: could not copy SugarDocument revision file $fileLocation => $dest");
                            }
                            $note->save();
                        }

                        $attachment = AttachmentPeer::attachmentFromSugarBean($documentRevision);
                        //print_r($attachment);
                        if (!is_null($mailer)) {
                            $mailer->addAttachment($attachment);
                        }
                    }
                }
            }

            /* handle template attachments */
            if (!empty($request['templateAttachments'])) {
                $exNotes = explode("::", $request['templateAttachments']);

                foreach ($exNotes as $noteId) {
                    $noteId = trim($noteId);

                    if (!empty($noteId)) {
                        $note = new Note();
                        $note->retrieve($noteId);

                        if (!empty($note->id)) {
                            $filename = $note->filename;
                            $noteGUID = preg_replace('/[^a-z0-9\-]/', "", $note->id);
                            $fileLocation = "upload://{$noteGUID}";
                            $mime_type = $note->file_mime_type;

                            if (!$note->embed_flag) {
                                $attachment = AttachmentPeer::attachmentFromSugarBean($note);
                                //print_r($attachment);
                                if (!is_null($mailer)) {
                                    $mailer->addAttachment($attachment);
                                }

                                // only save attachments if we're archiving or drafting
                                if ((($this->type == 'draft') && !empty($this->id)) || (isset($request['saveToSugar']) && $request['saveToSugar'] == 1)) {
                                    if ($note->parent_id != $this->id) {
                                        $this->saveTempNoteAttachments($filename, $fileLocation, $mime_type, $noteGUID);
                                    }
                                } // if
                            } // if
                        } else {
                            $fileGUID = preg_replace('/[^a-z0-9\-]/', "", substr($noteId, 0, 36));
                            $fileLocation = $this->et->userCacheDir . "/{$fileGUID}";
                            $filename = substr($noteId, 36,
                                strlen($noteId)); // strip GUID	for PHPMailer class to name outbound file

                            $mimeType = $this->email2GetMime($fileLocation);
                            $note = $this->saveTempNoteAttachments($filename, $fileLocation, $mimeType);

                            $attachment = AttachmentPeer::attachmentFromSugarBean($note);
                            //print_r($attachment);
                            if (!is_null($mailer)) {
                                $mailer->addAttachment($attachment);
                            }
                        }
                    }
                }
            }

            /**********************************************************************
             * Final Touches
             */
            if ($this->type == 'draft' && !$saveAsDraft) {
                // sending a draft email
                $this->type = 'out';
                $this->status = 'sent';
                $forceSave = true;
            } elseif ($saveAsDraft) {
                $this->type = 'draft';
                $this->status = 'draft';
                $forceSave = true;
            }

            if (!is_null($mailer)) {
                $sentMessage = $mailer->send();
            }
        } catch (MailerException $me) {
            $GLOBALS["log"]->error($me->getLogMessage());
            throw($me);
        } catch (Exception $e) {
            // eat the phpmailerException but use it's message to provide context for the failure
            $me = new MailerException("Email2Send Failed: " . $e->getMessage(), MailerException::FailedToSend);
            $GLOBALS["log"]->error($me->getLogMessage());
            $GLOBALS["log"]->info($me->getTraceMessage());
            if (!empty($mailConfig)) {
                $GLOBALS["log"]->info($mailConfig->toArray(), true);
            }
            throw($me);
        }


        if ((!(empty($orignialId) || $saveAsDraft || ($this->type == 'draft' && $this->status == 'draft'))) &&
            (($_REQUEST['composeType'] == 'reply') || ($_REQUEST['composeType'] == 'replyAll') || ($_REQUEST['composeType'] == 'replyCase')) && ($orignialId != $this->id)
        ) {
            $originalEmail = BeanFactory::getBean('Emails', $orignialId);
            $originalEmail->reply_to_status = 1;
            $originalEmail->save();
            $this->reply_to_status = 0;
        } // if

        if (isset($_REQUEST['composeType']) && ($_REQUEST['composeType'] == 'reply' || $_REQUEST['composeType'] == 'replyCase')) {
            if (isset($_REQUEST['ieId']) && isset($_REQUEST['mbox'])) {
                $emailFromIe = BeanFactory::getBean('InboundEmail', $_REQUEST['ieId'],
                    array('disable_row_level_security' => true));
                $emailFromIe->mailbox = $_REQUEST['mbox'];
                if (isset($emailFromIe->id) && $emailFromIe->is_personal) {
                    if ($emailFromIe->isPop3Protocol()) {
                        $emailFromIe->mark_answered($this->uid, 'pop3');
                    } elseif ($emailFromIe->connectMailserver() == 'true') {
                        $emailFromIe->markEmails($this->uid, 'answered');
                        $emailFromIe->mark_answered($this->uid);
                    }
                }
            }
        }


        if ($forceSave ||
            $this->type == 'draft' ||
            $this->type == 'archived' ||
            (isset($request['saveToSugar']) && $request['saveToSugar'] == 1)
        ) {

            // Set Up From Name and Address Information
            if ($this->type == 'archived') {
                $this->from_addr = empty($request['archive_from_address']) ? '' : $request['archive_from_address'];
            } elseif (!empty($mailConfig)) {
                $sender = $mailConfig->getFrom();
                $decodedFromName = mb_decode_mimeheader($sender->getName());
                $this->from_addr = "{$decodedFromName} <" . $sender->getEmail() . ">";
            } else {
                $ret = $current_user->getUsersNameAndEmail();
                if (empty($ret['email'])) {
                    $systemReturn = $current_user->getSystemDefaultNameAndEmail();
                    $ret['email'] = $systemReturn['email'];
                    $ret['name'] = $systemReturn['name'];
                }
                $decodedFromName = mb_decode_mimeheader($ret['name']);
                $this->from_addr = "{$decodedFromName} <" . $ret['email'] . ">";
            }

            $this->from_addr_name = $this->from_addr;
            $this->to_addrs = $_REQUEST['sendTo'];
            $this->to_addrs_names = $_REQUEST['sendTo'];
            $this->cc_addrs = $_REQUEST['sendCc'];
            $this->cc_addrs_names = $_REQUEST['sendCc'];
            $this->bcc_addrs = $_REQUEST['sendBcc'];
            $this->bcc_addrs_names = $_REQUEST['sendBcc'];
            $this->team_id = (isset($_REQUEST['primaryteam']) ? $_REQUEST['primaryteam'] : $current_user->getPrivateTeamID());
            $teamSet = BeanFactory::getBean('TeamSets');
            $teamIdsArray = (isset($_REQUEST['teamIds']) ? explode(",",
                $_REQUEST['teamIds']) : array($current_user->getPrivateTeamID()));
            $this->team_set_id = $teamSet->addTeams($teamIdsArray);
            if (!empty($request['forward_reply'])) {
                $this->forward_reply = $request['forward_reply'];
            }

            if ($archived && !empty($request['assignedUser'])) {
                $this->assigned_user_id = $request['assignedUser'];
            } else {
                $this->assigned_user_id = $current_user->id;
            }

            if ($archived && !empty($request['dateSent'])) {
                $this->date_sent = $request['dateSent'];
            } else {
                $this->date_sent = $timedate->now();
            }

            ///////////////////////////////////////////////////////////////////
            ////	LINK EMAIL TO SUGARBEANS BASED ON EMAIL ADDY

            if (!empty($_REQUEST['parent_type']) && !empty($_REQUEST['parent_id'])) {
                $this->parent_id = $this->db->quote($_REQUEST['parent_id']);
                $this->parent_type = $this->db->quote($_REQUEST['parent_type']);
                $a = $this->db->fetchOne("SELECT count(*) c FROM emails_beans WHERE  email_id = '{$this->id}' AND bean_id = '{$this->parent_id}' AND bean_module = '{$this->parent_type}'");
                if ($a['c'] == 0) {
                    $bean = BeanFactory::getBean($_REQUEST['parent_type'], $_REQUEST['parent_id']);
                    if (!empty($bean)) {
                        if (!empty($bean->field_defs['emails']['type']) && $bean->field_defs['emails']['type'] == 'link') {
                            $email_link = "emails";
                        } else {
                            $email_link = $this->findEmailsLink($bean);
                        }
                        if ($email_link && $bean->load_relationship($email_link)) {
                            $bean->$email_link->add($this);
                        }
                    }
                } // if

            } else {
                $c = BeanFactory::getBean('Cases');
                $ie = BeanFactory::getBean('InboundEmail');
                if ($caseId = $ie->getCaseIdFromCaseNumber($subject, $c)) {
                    $c->retrieve($caseId);
                    $c->load_relationship('emails');
                    $c->emails->add($this->id);
                    $this->parent_type = "Cases";
                    $this->parent_id = $caseId;
                } // if
            } // else

            ////	LINK EMAIL TO SUGARBEANS BASED ON EMAIL ADDY
            ///////////////////////////////////////////////////////////////////
            $this->save();
        }

        $mailConfigId = ($mailConfig instanceof OutboundEmailConfiguration) ? $mailConfig->getConfigId() : null;

        if (!empty($request['fromAccount']) && !empty($sentMessage) && !empty($mailConfigId)) {
            $ie = BeanFactory::getBean('InboundEmail', $request['fromAccount']);
            $oe = new OutboundEmail();
            $oe->retrieve($mailConfigId);

            if (isset($ie->id) && !$ie->isPop3Protocol() && !empty($oe->id) && $oe->mail_smtptype != 'gmail') {
                $sentFolder = $ie->get_stored_options('sentFolder');

                if (!empty($sentFolder)) {
                    $ie->mailbox = $sentFolder;

                    if ($ie->connectMailserver() == 'true') {
                        $connectString = $ie->getConnectString($ie->getServiceString(), $ie->mailbox);

                        if (imap_append($ie->conn, $connectString, $sentMessage, '\\Seen')) {
                            $GLOBALS['log']->info("copied email ({$this->id}) to {$ie->mailbox} for {$ie->name}");
                        } else {
                            $GLOBALS['log']->debug("could not copy email to {$ie->mailbox} for {$ie->name}");
                        }
                    } else {
                        $GLOBALS['log']->debug(
                            "could not connect to mail server for folder {$ie->mailbox} for {$ie->name}"
                        );
                    }
                } else {
                    $GLOBALS['log']->debug("could not copy email to {$ie->mailbox} sent folder as its empty");
                }
            }
        }

        return true;
    } // end email2Send

} // end class def
