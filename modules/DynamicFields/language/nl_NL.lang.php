<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Masker uitschakelen',
  'COLUMN_TITLE_AUDIT' => 'Audit',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Automatisch ophogen van de volgende waarde',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Commentaar tekst',
  'COLUMN_TITLE_DATA_TYPE' => 'Datatype',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Standaardwaarde',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Standaardwaarde',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# Items weergeven',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Weergave label',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Dubbele waarden samenvoegen',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Activeer zoekbereik',
  'COLUMN_TITLE_EXT1' => 'Extra Meta Veld 1',
  'COLUMN_TITLE_EXT2' => 'Extra Meta Veld 2',
  'COLUMN_TITLE_EXT3' => 'Extra Meta Veld 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Frame hoogte',
  'COLUMN_TITLE_FTS' => 'Full Text Searchable',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Globaal Zoeken',
  'COLUMN_TITLE_HELP_TEXT' => 'Help tekst',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_IMPORTABLE' => 'Importeerbaar',
  'COLUMN_TITLE_LABEL' => 'Veldlabel',
  'COLUMN_TITLE_LABEL_COLS' => 'Kolommen',
  'COLUMN_TITLE_LABEL_ROWS' => 'Rijen',
  'COLUMN_TITLE_LABEL_VALUE' => 'Label waarde',
  'COLUMN_TITLE_MASS_UPDATE' => 'Massaal wijzigen',
  'COLUMN_TITLE_MAX_SIZE' => 'Maximum grootte',
  'COLUMN_TITLE_MAX_VALUE' => 'Grootste waarde',
  'COLUMN_TITLE_MIN_VALUE' => 'Kleinste waarde',
  'COLUMN_TITLE_NAME' => 'Veldnaam',
  'COLUMN_TITLE_PRECISION' => 'Aantal decimalen (nauwkeurigheid)',
  'COLUMN_TITLE_REPORTABLE' => 'Rapporteerbaar',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Verplicht veld',
  'COLUMN_TITLE_URL' => 'Standaard URL',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'U.S. Format',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Veldnaam bestaat reeds',
  'ERR_RESERVED_FIELD_NAME' => 'Gereserveerd sleutelwoord',
  'ERR_SELECT_FIELD_TYPE' => 'Selecteer een veldtype',
  'LBL_ADD_FIELD' => 'Veld toevoegen:',
  'LBL_AUDITED' => 'Gecontroleerd',
  'LBL_BTN_ADD' => 'Toevoegen',
  'LBL_BTN_EDIT' => 'Wijzigen',
  'LBL_BTN_EDIT_VISIBILITY' => 'Wijzig zichtbaarheid',
  'LBL_CALCULATED' => 'Berekende waarde',
  'LBL_DATA_TYPE' => 'Datatype',
  'LBL_DEFAULT_VALUE' => 'Standaardwaarde',
  'LBL_DEPENDENT' => 'Afhankelijk',
  'LBL_DEPENDENT_CHECKBOX' => 'Afhankelijk',
  'LBL_DEPENDENT_TRIGGER' => 'Trigger',
  'LBL_DROP_DOWN_LIST' => 'Dropdownlijst',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Afhankelijk',
  'LBL_EDIT_VIS' => 'Edit Visibility',
  'LBL_ENFORCED' => 'Gedwongen',
  'LBL_FORMULA' => 'Formule',
  'LBL_GENERATE_URL' => 'Genereer URL',
  'LBL_HAS_PARENT' => 'Has Parent',
  'LBL_HELP' => 'Help',
  'LBL_IMAGE_BORDER' => 'Rand',
  'LBL_IMAGE_HEIGHT' => 'Hoogte',
  'LBL_IMAGE_WIDTH' => 'Breedte',
  'LBL_LABEL' => 'Label',
  'LBL_LINK_TARGET' => 'Open link in',
  'LBL_MODULE' => 'Module',
  'LBL_MODULE_SELECT' => 'Module te wijzigen',
  'LBL_MULTI_SELECT_LIST' => 'Multi Select Lijst',
  'LBL_PARENT_DROPDOWN' => 'Parent Dropdown',
  'LBL_RADIO_FIELDS' => 'Radioknoppen',
  'LBL_REPORTABLE' => 'Rapporteerbaar',
  'LBL_SEARCH_FORM_TITLE' => 'Zoek module',
  'LBL_VISIBLE_IF' => 'Zichtbaar indien',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_EMAIL_LIST' => 'E-mails',
  'LNK_MEETING_LIST' => 'Afspraken',
  'LNK_NEW_CALL' => 'Nieuw Telefoongesprek',
  'LNK_NEW_EMAIL' => 'E-mail archiveren',
  'LNK_NEW_MEETING' => 'Nieuwe Afspraak',
  'LNK_NEW_NOTE' => 'Nieuwe Notitie of Bijlage',
  'LNK_NEW_TASK' => 'Nieuwe Taak',
  'LNK_NOTE_LIST' => 'Notities',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Repareer custom veld',
  'LNK_SELECT_CUSTOM_FIELD' => 'Selecteer custom veld',
  'LNK_TASK_LIST' => 'Taken',
  'MSG_DELETE_CONFIRM' => 'Weet u zeker dat u dit item wilt verwijderen?',
  'POPUP_EDIT_HEADER_TITLE' => 'Bewerk custom veld',
  'POPUP_INSERT_HEADER_TITLE' => 'Voeg custom veld toe',
);

