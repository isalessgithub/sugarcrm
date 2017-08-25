<form name="LinkedinConfig" enctype='multipart/form-data' method="POST"
      action="index.php?module=RLS_LinkedinParserConfig&action=Social2SugarSettings">
    <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
        <tbody>
        <tr>
            <td colspan="5" align="left">
                <h4><b>Linkedin User Search</b></h4>
            </td>
        </tr>
        <tr>
            <td width="15%">Modules:</td>
            <td width="85%"><?php echo $LinkedinParserSettingsClass->
                getHtmlForMultiselectEnableModules($AdminLinkedinSettings['modules']);?>
            </td>
        </tr>
        <tr>
            <td width="15%">Default module:</td>
            <td width="85%"><?php echo $LinkedinParserSettingsClass->
                getDefaultModuleSearchHTML($AdminLinkedinSettings['default_module_search']);?>
            </td>
        </tr>
        </tbody>
    </table>

    <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
        <tbody>
        <tr>
            <td colspan="5" align="left">
                <h4><b>Duplicate search</b></h4>
            </td>
        </tr>

        <tr>
            <td width="15%"><?php echo $AdminLinkedinSettings['module_labels']['Accounts']?>:</td>
            <td width="85%">
                <?php echo $LinkedinParserSettingsClass->
                getListDuplicateHTML($AdminLinkedinSettings['dublicate']['Accounts'],'accounts_duplicate','Accounts');?>
            </td>
        </tr>
        <tr>
            <td width="15%"><?php echo $AdminLinkedinSettings['module_labels']['Contacts']?>:</td>
            <td width="85%">
                <?php echo $LinkedinParserSettingsClass->
                getListDuplicateHTML($AdminLinkedinSettings['dublicate']['Contacts'],'contacts_duplicate','Contacts');?>
            </td>
        </tr>
        <tr>
            <td width="15%"><?php echo $AdminLinkedinSettings['module_labels']['Leads']?>:</td>
            <td width="85%">
                <?php echo $LinkedinParserSettingsClass->
                getListDuplicateHTML($AdminLinkedinSettings['dublicate']['Leads'],'leads_duplicate','Leads');?>
            </td>
        </tr>
        <tr>
            <td width="15%"><?php echo $AdminLinkedinSettings['module_labels']['Prospects']?>:</td>
            <td width="85%">
                <?php echo $LinkedinParserSettingsClass->
                getListDuplicateHTML($AdminLinkedinSettings['dublicate']['Prospects'],'prospects_duplicate','Prospects');?>
            </td>
        </tr>
        <tr class="candidates_settings">
            <td width="15%"><?php echo $AdminLinkedinSettings['module_labels']['Candidates']?>:</td>
            <td width="85%">
                <?php echo $LinkedinParserSettingsClass->
                getListDuplicateHTML($AdminLinkedinSettings['dublicate']['rls_Candidates'],'rls_candidates_duplicate','rls_Candidates');?>
            </td>
        </tr>

        </tbody>
    </table>


    <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
        <tbody>
        <tr>
            <td colspan="3" align="left">
                <h4><b>Parsing</b></h4>
            </td>
        </tr>
        <tr>
            <td width="15%">Skills:</td>
            <td width="10%">

                <input id="skills" type="checkbox" name="skills" value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['skills']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>

        </tr>

        <tr>
            <td width="15%">Working Experience:</td>
            <td width="10%">

                <input id="working_experience" type="checkbox" name="working_experience"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['working_experience']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>

        </tr>
        <tr>
            <?php
                  global $sugar_version, $sugar_type;
                  $version = explode('.', $sugar_version);

                  if ($sugar_type != 'CE' && ($version[0] == 7 || $version[0] > 7)) {?>
            <td width="15%">Create Account assigned to Contact:<img onclick="return SUGAR.util.showHelpTips(this,'If this box is checked and you create a LinkedIn user as a SugarCRM contact, Social2Sugar will automatically create corresponding Account (company where this person is currently employed)' );" src="custom/themes/default/images/helpInline_pro.png" alt="Information" class="inlineHelpTip" border="0"></td>
            <?php
            } else {?>
            <td width="15%">Create Account assigned to Contact:<img onclick="return SUGAR.util.showHelpTips(this,'If this box is checked and you create a LinkedIn user as a SugarCRM contact, Social2Sugar will automatically create corresponding Account (company where this person is currently employed)' );" src="custom/themes/default/images/helpInline_ce.gif" alt="Information" class="inlineHelpTip" border="0"></td>
            <?php } ?>
            <td width="10%">

                <input id="parse_accounts" type="checkbox" name="parse_accounts"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['parse_accounts']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>

        </tr>
        </tbody>
    </table>


    <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
        <tbody>
        <tr>
            <td colspan="3" align="left">
                <h4><b>Other</b></h4>
            </td>
        </tr>
        <tr>
            <td width="15%">Assign to:</td>
            <td width="10%">
                <select id="assignt_to" name="assignt_to">
                    <option value="current_user">Current User</option>
                    <option value="select_user">Select User</option>
                </select>

            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr>
            <td width="15%">Default status field in Leads:</td>
            <td width="10%">
                <select id="leads_status_f" name="leads_status_f">
                    <?php echo $LinkedinParserSettingsClass->getStatusFieldsHTML('Leads');?>
                </select>

            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr class="candidates_settings">
            <td width="15%">Default status field in Candidates:</td>
            <td width="10%">
                <select id="candidate_status_f" name="candidate_status_f">
                    <?php echo $LinkedinParserSettingsClass->getStatusFieldsHTML('rls_Candidates');?>
                </select>

            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr class="jobs_allow_statuses_list">
            <td width="15%">Default allow statuses list in Jobs:</td>
            <td width="10%">
                <?php
                        echo $LinkedinParserSettingsClass->
                getJobsAllowStatusesList($AdminLinkedinSettings['jobs_allow_statuses_list']);
                ?>
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <?php if($LinkedinParserSettingsClass->candidates_exist){ ?>
        <tr>
            <td width="15%">Job List:</td>
            <td width="10%">

                <input id="job_list" type="checkbox" name="job_list" value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['job_list']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <?php } ?>
        <tr>
            <td width="15%">Target List:</td>
            <td width="10%">

                <input id="target_list" type="checkbox" name="target_list"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['target_list']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr>
            <td width="15%">Show technical data:</td>
            <td width="10%">

                <input id="show_technical_data" type="checkbox" name="show_technical_data"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['show_technical_data']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <?php
              if ($this->sugar_type != 'CE' && ($version[0] == 7 || $version[0] > 7)) { ?>
        <tr class="ignore_job_list_security">
            <td width="15%">Ignore team set of Jobs:</td>
            <td width="10%">

                <input id="ignore_job_list_security" type="checkbox" name="ignore_job_list_security"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['ignore_job_list_security']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr class="ignore_target_list_security">
            <td width="15%">Ignore team set of Target Lists:</td>
            <td width="10%">

                <input id="ignore_target_list_security" type="checkbox" name="ignore_target_list_security"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['ignore_target_list_security']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <tr class="ignore_dublicates_team_security">
            <td width="15%">Ignore teams of duplicates:</td>
            <td width="10%">

                <input id="ignore_dublicates_team_security" type="checkbox" name="ignore_dublicates_team_security"
                       value='1' <?php echo $LinkedinParserSettingsClass->
                setCehckbox($AdminLinkedinSettings['ignore_dublicates_team_security']);?> />
            </td>

            <td width="75%">
                <span style=" margin-top: 25px;"></span>
            </td>


        </tr>
        <?php } ?>
        </tbody>
    </table>

    <table width="100%" border="0" cellspasing="1" cellpadding="0" class="actionsContainer" style="margin-top: 1cm;">
        <tbody>
        <tr>
            <td>
                <input title="Save" accesskey="a" class="button primary" type="submit" name="save" value="  Save  ">&nbsp;
                <input title="Save" accesskey="a" class="button primary" type="submit" name="reset_to_default"
                       value="  Reset to default  ">&nbsp;
                <input title onclick="document.location.href = 'index.php?module=Administration&action=index'"
                       class="button primary" type="button" name="cancel" value="  Cancel  ">
            </td>
        </tr>
        </tbody>
    </table>

</form>

<script type="text/javascript">
    $(document).ready(function () {

        $("#available_val_dd").change(function () {

            if ($(this).val() == '') {
                $("#available_val_text").val("");
            }

            if ($(this).val() == 'date') {
                $("#available_val_text").val('[Date]');
            }

            if ($(this).val() == 'from_to') {
                $("#available_val_text").val('[From-To]');
            }
        });

        $("#insert").click(function () {
            var text_available = $("#available_val_text").val();
            var text_note = $("#notes_name_mask").val();
            var ins_text = text_note + text_available;
            $("#notes_name_mask").val(ins_text);
        });

        var candidates_exist =
        <
        ? php echo
        $AdminLinkedinSettings['candidates_exist'] ?
        >
        ;
        if (candidates_exist) {
            $('.candidates_settings').show();
            $('.jobs_allow_statuses_list').show();
            $('.ignore_job_list_security').show();
        } else {
            $('.candidates_settings').hide();
            $('.jobs_allow_statuses_list').hide();
            $('.ignore_job_list_security').hide();
        }

        var assignt_to = '<?php echo $AdminLinkedinSettings['
        assignt_to
        '] ?>';
        if (assignt_to) {
            $('#assignt_to').val(assignt_to);
        }

        var leads_status_f = '<?php echo $AdminLinkedinSettings['
        leads_status_f
        '] ?>';
        if (leads_status_f) {
            $('#leads_status_f').val(leads_status_f);
        }
        var candidate_status_f = '<?php echo $AdminLinkedinSettings['
        candidate_status_f
        '] ?>';
        if (candidate_status_f) {
            $('#candidate_status_f').val(candidate_status_f);
        }
    });


</script>
