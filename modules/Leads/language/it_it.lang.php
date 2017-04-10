<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Per eliminare il lead deve essere specificato il numero del record.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Descrizione Azienda',
    'LBL_ACCOUNT_ID'=>'ID Azienda',
    'LBL_ACCOUNT_NAME' => 'Nome azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Attività',
    'LBL_ADD_BUSINESSCARD' => 'Aggiungi Business Card',
    'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
    'LBL_ALT_ADDRESS_CITY' => 'Alt Indirizzo, Comune',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Indirizzo, Nazione',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Indirizzo, CAP',
    'LBL_ALT_ADDRESS_STATE' => 'Alt Indirizzo, Provincia',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt Indirizzo, Via (2)',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt Indirizzo, Via (3)',
    'LBL_ALT_ADDRESS_STREET' => 'Alt Indirizzo, Via',
    'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_EMAIL' => 'Email alternativa:',
    'LBL_ANY_PHONE' => 'Telefono alternativo:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Assegnato a:',
    'LBL_BACKTOLEADS' => 'Torna ai Lead',
    'LBL_BUSINESSCARD' => 'Converti Lead',
    'LBL_CITY' => 'Comune:',
    'LBL_CONTACT_ID' => 'ID Contatto',
    'LBL_CONTACT_INFORMATION' => 'Informazioni Lead',
    'LBL_CONTACT_NAME' => 'Nome Lead:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Opportunità-Lead:',
    'LBL_CONTACT_ROLE' => 'Ruolo:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Converti',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Salva e Converti',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(opzionale)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Non hai i permessi di modifica sui moduli richiesti per convertire un lead: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Ricerca duplicati in corso...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignora e crea nuovo',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Torna ai duplicati',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Crea Nuovo',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Cerca',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} duplicati trovati',
    'LBL_CONVERT_CREATE_NEW' => 'Nuovo {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => 'Seleziona {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Selezione in corso {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Crea {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Creazione in corso {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Azzera',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Copia attività correlate a',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Più attività correlate a',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Spostare le attività correlate al record del contatto',
    'LBL_CONVERTED_ACCOUNT'=>'Azienda Convertita:',
    'LBL_CONVERTED_CONTACT' => 'Contatto Convertito:',
    'LBL_CONVERTED_OPP'=>'Opportunità Convertita:',
    'LBL_CONVERTED'=> 'Convertito',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converti Lead [Alt+V]',
    'LBL_CONVERTLEAD' => 'Converti Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Attenzione: Lo stato del Lead che si sta per convertire è "Convertito". Il Contatto e/o l´Azienda potrebbe essere già stata creata da un Lead. Se desideri continuare con la conversione del Lead, clicca Salva. Per tornare indietro al Lead senza convertirlo, clicca Annulla.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Possibile Contatto:',
    'LBL_CONVERTLEAD_ERROR' => 'Impossibile convertire il lead',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Il lead {{leadName}} è stato convertito con successo ma si è verificato un errore durante il caricamente degli allegati su uno o più record',
    'LBL_CONVERTLEAD_SUCCESS' => 'Il lead {{leadName}} è stato convertito con successo',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_CREATED_NEW' => 'Creato un nuovo',
	'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
    'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
    'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
    'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
    'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lead',
    'LBL_DEPARTMENT' => 'Divisione:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DO_NOT_CALL' => 'Non chiamare:',
    'LBL_DUPLICATE' => 'Lead Simili',
    'LBL_EMAIL_ADDRESS' => 'Indirizzo Email:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
    'LBL_EXISTING_CONTACT' => 'Usato un contatto esistente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usata un´opportunità esistente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_FULL_NAME' => 'Nome Completo:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Cronologia',
    'LBL_HOME_PHONE' => 'Telefono Casa:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Il lead da vCard è stato creato con successo',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo lead importando una vCard dal tuo computer.',
    'LBL_INVALID_EMAIL'=>'Email non valida:',
    'LBL_INVITEE' => 'Riporta a',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead:',
    'LBL_LEAD_SOURCE' => 'Fonte del lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CONTACT_NAME' => 'Nome Lead',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo',
    'LBL_LIST_DATE_ENTERED' => 'Data Creazione',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_VIEW_FORM_TITLE' => 'Visualizza Lead',
    'LBL_LIST_FORM_TITLE' => 'Elenco Lead',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead',
    'LBL_LIST_LEAD_SOURCE' => 'Fonte del Lead',
    'LBL_LIST_MY_LEADS' => 'I miei Lead',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_REFERED_BY' => 'Riferito Da',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_LIST_TITLE' => 'Funzione',
    'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
    'LBL_MODULE_NAME' => 'Lead',
    'LBL_MODULE_NAME_SINGULAR' => 'Lead',
    'LBL_MODULE_TITLE' => 'Lead: Home',
    'LBL_NAME' => 'Nome completo:',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Lead',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nuova Password del Portale:',
    'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
    'LBL_OPP_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valore Opportunità:',
    'LBL_OPPORTUNITY_ID'=>'ID Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_PORTAL_ACTIVE' => 'Portale Attivo:',
    'LBL_PORTAL_APP'=> 'Applicazione Portale',
    'LBL_PORTAL_INFORMATION' => 'Informazioni Portale',
    'LBL_PORTAL_NAME' => 'Nome Portale:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'La password del portale è impostata:',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_STREET' => 'Indirizzo',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Indirizzo Primario, Via (2)',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Indirizzo Primario, Via (3)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Il {{moduleSingularLower}} è stato creato con successo <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Riferito Da:',
    'LBL_REPORTS_TO_ID'=>'Dipende da ID',
    'LBL_REPORTS_TO' => 'Dipende da:',
    'LBL_REPORTS_FROM' => 'Report Da:',
    'LBL_SALUTATION' => 'Titolo',
    'LBL_MODIFIED'=>'Modificato Da',
	'LBL_MODIFIED_ID'=>'Modificato Da Id',
	'LBL_CREATED'=>'Creato Da',
	'LBL_CREATED_ID'=>'Creato Da Id',
    'LBL_SEARCH_FORM_TITLE' => 'Ricerca Lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Scegli i Lead selezionati',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Scegli i Lead selezionati',
    'LBL_STATE' => 'Provincia:',
    'LBL_STATUS_DESCRIPTION' => 'Descrizione Stato:',
    'LBL_STATUS' => 'Stato:',
    'LBL_TITLE' => 'Funzione:',
    'LBL_UNCONVERTED'=> 'Non convertito',
    'LNK_IMPORT_VCARD' => 'Crea Lead da vCard',
    'LNK_LEAD_LIST' => 'Visualizza Lead',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LNK_NEW_LEAD' => 'Nuovo Lead',
    'LNK_NEW_NOTE' => 'Nuova Nota',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_CALL' => 'Nuova Chiamata',
    'LNK_NEW_MEETING' => 'Nuova Riunione',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
	'LNK_SELECT_ACCOUNTS' => '<b>O</b> Seleziona Azienda',
    'LNK_SELECT_CONTACTS' => '<b>O</b> Selezionare Contatto',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia indirizzo alternativo in quello primario',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copia indirizzo primario in quello alternativo',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creazione di una opportunità richiede la presenza di un´azienda. Creare un´azienda o selezionarne una già esistente.',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo lead dal reclamo?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record come rapporto diretto?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campagne',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campagne di Successo',
    'LBL_TARGET_BUTTON_LABEL'=>'Obiettivi',
    'LBL_TARGET_BUTTON_TITLE'=>'Obiettivi',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Campagna:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Utene Assegnato',
    'LBL_PROSPECT_LIST' => 'Lista Obiettivo',
    'LBL_PROSPECT' => 'Obiettivo',
    'LBL_CAMPAIGN_LEAD' => 'Campagne',
	'LNK_LEAD_REPORTS' => 'Visualizza i Report dei Lead',
    'LBL_BIRTHDATE' => 'Data di nascita:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Grazie per la sottoscrizione.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Ci scusiamo ma il server al momento non è disponibile, riprovare più tardi.',
    'LBL_ASSISTANT_PHONE' => 'Telefono Assistente',
    'LBL_ASSISTANT' => 'Assistente',
    'LBL_REGISTRATION' => 'Registrazione',
    'LBL_MESSAGE' => 'Si prega di inserire qui sotto le informazioni richieste. L´informazione e/o azienda saranno creati in attesa di una vostra approvazione.',
    'LBL_SAVED' => 'Grazie per esserti registrato. La tua azienda sarà creata e qualcuno la contatterà al più presto.',
    'LBL_CLICK_TO_RETURN' => 'Ritornare al Portale',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagne',
    'LBL_CONVERT_MODULE_NAME' => 'Modulo',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modulo',
    'LBL_CONVERT_REQUIRED' => 'Richiesto',
    'LBL_CONVERT_SELECT' => 'Permetti Selezione',
    'LBL_CONVERT_COPY' => 'Copia Dati',
    'LBL_CONVERT_EDIT' => 'Modifica',
    'LBL_CONVERT_DELETE' => 'Cancella',
    'LBL_CONVERT_ADD_MODULE' => 'Aggiungi Modulo',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Modifica Converti Layout',
    'LBL_CREATE' => 'Crea',
    'LBL_SELECT' => '<b>O</b> Seleziona',
	'LBL_WEBSITE' => 'Sito Web',
	'LNK_IMPORT_LEADS' => 'Importa Lead',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Nota: la pagina corrente Converti lead contiene campi custom. Quando personalizzi la pagina Converti Lead da Studio per la prima volta, dovrai aggiungere i campi custom al layout, a seconda delle necessità. I campi custom non appaiono automaticamente nel layout come accadeva precedentemente.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Il modulo per creare un nuovo record in.',
	'LBL_REQUIRED_TIP' 	=> 'I moduli richiesti devono essere creati o selezionati prima che il lead possa essere convertito.',
	'LBL_COPY_TIP'		=> 'Se selezionati, i campi dal lead saranno copiati in campi con lo stesso nome in record creati recentemente.',
	'LBL_SELECTION_TIP' => 'I moduli che hanno un campo collegato al modulo dei contatti possono essere selezionati piuttosto che creati durante il processo di conversione del lead.',
	'LBL_EDIT_TIP'		=> 'Modifica il converti layout per questo modulo.',
	'LBL_DELETE_TIP'	=> 'Rimuovi questo modulo dal converti layout.',

    'LBL_ACTIVITIES_MOVE'   => 'Sposta Attività in',
    'LBL_ACTIVITIES_COPY'   => 'Copia Attività in',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Seleziona il record al quale associare le attività del Lead. Compiti, Chiamate, Riunioni, Note e Email verranno associate ai record selezionati.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Seleziona il record per il quale creare delle copie delle attività del Lead. Nuovi compiti, chiamate, riunioni, note verranno create per ciascuno dei record selezionati. Le email saranno collegate ai record selezionati.",
    //For export labels
    'LBL_PHONE_HOME' => 'Telefono Abitazione',
    'LBL_PHONE_MOBILE' => 'Cellulare',
    'LBL_PHONE_WORK' => 'Telefono Ufficio',
    'LBL_PHONE_OTHER' => 'Altro Telefono',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
    'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Cellulare',
    'LBL_EXPORT_EMAIL2'=>'Altro indirizzo email',
	'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Inserisci Data' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Caricamento' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Modifica' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'ID Principale DNB',
    'LBL_DNB_BAL_PREVIEW' => 'Anteprima Lead',
    'LBL_DNB_BAL_RSLT_CNT' => 'Lead',
    'LBL_DNB_BAL_RSLT_HEADER' => 'DNB: Informazioni Lead',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Note',

    'LBL_HELP_CONVERT_TITLE' => 'Converti un {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Il modulo {{plural_module_name}} consiste in singoli prospects che potrebbero essere interessati ad un prodotto o servizio che la tua azienda fornisce. Una volta che il {{module_name}} è qualificato come {{opportunities_singular_module}} di vendita, {{plural_module_name}} può essere convertito in {{contacts_module}}, {{opportunities_module}}, e {{accounts_module}}. Ci sono vari modi per creare {{plural_module_name}} in Sugar come mediante il modulo {{plural_module_name}}, duplicazione, importando {{plural_module_name}}, ecc. Una volta che {{module_name}} è creato, puoi visualizzare o modificare informazioni pertinenti il {{module_name}} attraverso la vista elenco del modulo {{plural_module_name}}.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Il modulo {{plural_module_name}} consiste in singoli prospects che potrebbero essere interessati ad un prodotto o servizio che la tua azienda fornisce. 
- Modifica i campi di questo record cliccando sul singolo campo o sul pulsante Modifica. 
- Visualizza o modifica i collegamenti agli altri record nei sottopannelli agendo sul pulsante "Visualizza Dati" in basso a sinistra. 
- Crea e visualizza i commenti degli utenti e la cronologia delle modifiche ai record nel modulo {{activitystream_singular_module}} agendo sul pulsante "Activity Stream" in basso a sinistra. 
- Segui o imposta come preferito questo record usando le icone alla destra del nome del record. 
- Azioni aggiuntive sono disponibili nel menù a tendina delle Azioni alla destra del pulsante Modifica.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Il modulo {{plural_module_name}} consiste in singoli prospects che potrebbero essere interessati ad un prodotto o servizio fornito dalla tua azienda. Una volta che il {{module_name}} è qualificato come una {{opportunities_singular_module}} di vendita, può essere convertito in {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}}, o altri record. 

Per creare un {{module_name}}: 
1. Compila i campi con i valori desiderati. 
- I campi contrassegnati con "Obbligatorio" devono essere compilati prima del salvataggio.
- Clicca "Mostra più Moduli" per visualizzare campi aggiuntivi se necessario. 
2. Clicca "Salva" per finalizzare il nuovo record e tornare alla pagina precedente.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar ti abilita a convertire {{plural_module_name}} in {{contacts_module}}, {{accounts_module}}, e altri moduli una volta che {{module_name}} trova i criteri di qualificazione. Avanzare attraverso ciascun modulo modificando i campi e confermando i nuovi valori dei record cliccando per ciascuno il pulsante Associa. Se Sugar rileva un record esistente le cui informazioni corrispondono a quelle di {{module_name}}, puoi scegliere un duplicato e confermare la selezione con il pulsante Associa o cliccare "Ignora e crea nuovo" e procedere normalmente. Dopo aver confermato ogni modulo richiesto e desiderato, cliccare il pulsante Salva e Converti in alto per finalizzare la conversione.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizza con Marketo®',
    'LBL_MKTO_ID' => 'ID Lead Marketo',
    'LBL_MKTO_LEAD_SCORE' => 'Punteggio Lead',

    'LBL_FILTER_LEADS_REPORTS' => 'Report Lead',
);
