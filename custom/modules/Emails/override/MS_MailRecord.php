<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Emails/MailRecord.php');

require_once 'custom/modules/Emails/override/MS_Email.php';

class MS_MailRecord extends MailRecord
{
    /**
     * Saves and sends the email.
     *
     * @return array
     */
    public function send()
    {
        return $this->toEmailBean("ready");
    }

    /**
     * Prepares and executes the email request according to the expectations of the status.
     *
     * @param $status
     * @return array - Mail API Response Record
     * @throws MailerException
     */
    protected function toEmailBean($status)
    {
        if (!empty($this->mockEmailBean)) {
            $email = $this->mockEmailBean; // Testing purposes only
        } else {
//            $email = new Email();
            $email = new MS_Email();
        }
        $email->email2init();

        $fromAccount = null;

        if (!empty($this->mailConfig)) {
            $fromAccount = $this->mailConfig;
        }

        $to = $this->addRecipients($this->toAddresses);
        $cc = $this->addRecipients($this->ccAddresses);
        $bcc = $this->addRecipients($this->bccAddresses);

        $attachments = $this->splitAttachments($this->attachments);

        $request = $this->setupSendRequest($status, $fromAccount, $to, $cc, $bcc, $attachments);

        $request['forward_reply'] = $this->forward_reply;

        $_REQUEST = array_merge($_REQUEST, $request);

        $errorData = null;

        // add from data to request
        $request['msFromAddress'] = $this->msFromAddress;
        $request['msFromName'] = $this->msFromName;

        try {
            $this->startCapturingOutput();
            $email->email2Send($request);
            $errorData = $this->endCapturingOutput();

            if (strlen($errorData) > 0) {
                throw new MailerException('Email2Send returning unexpected output: ' . $errorData);
            }

            $response = $this->toApiResponse($status, $email);
            return $response;

        } catch (Exception $e) {
            if (is_null($errorData)) {
                $errorData = $this->endCapturingOutput();
            }
            if (!($e instanceof MailerException)) {
                $e = new MailerException($e->getMessage());
            }
            if (empty($errorData)) {
                $GLOBALS["log"]->error("Message: " . $e->getLogMessage());
            } else {
                $GLOBALS["log"]->error("Message: " . $e->getLogMessage() . "  Data: " . $errorData);
            }

            throw $e;
        }
    }
}
