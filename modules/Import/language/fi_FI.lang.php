<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Tiedosto luettu',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'riviä ei tuotu virheestä johtuen',
    'LBL_UPDATE_SUCCESSFULLY' => 'tietuetta päivitettiin',
    'LBL_SUCCESSFULLY_IMPORTED' => 'tietuetta luotiin',
    'LBL_STEP_4_TITLE' => 'Vaihe {0}: Tuo tiedosto',
    'LBL_STEP_5_TITLE' => 'Vaihe {0}: Katso tuodut tulokset',
    'LBL_CUSTOM_ENCLOSURE' => 'Rivien hyväksyjä:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Ei voida julkaista. Toinen tuontikuvaus on jo julkaistu samalla nimellä.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Ei pystytty poistamaan toiselle käyttäjälle kuuluvaa kuvausta. Omistat samannimisen tuontikuvauksen.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Tämän tyyppiselle moduulille ei ole tuontia',
    'LBL_IMPORT_TYPE' => 'Mitä haluaisit tehdä tuodulla tiedolla?',
    'LBL_IMPORT_BUTTON' => 'Luo vain uusi tietue',
    'LBL_UPDATE_BUTTON' => 'Luo uusi tietue ja päivitä olemassa olevat',
    'LBL_CREATE_BUTTON_HELP' => 'Käytä tätä vaihtoehtoa luodaksesi uusia tietueita. Huom: tuotavan tiedoston rivit, jotka sisältävät olemassaolevia tietueita vastaavia arvoja ei tuoda, jos arvot on merkattu ID-kenttään.',
    'LBL_UPDATE_BUTTON_HELP' => 'Käytä tätä vaihtoehtoa päivittääksesi olemassa olevat tietueet. Tiedot tuontitiedostossa sovitetaan olemassa oleviin tietueisiin tuotavan tiedoston ID-kentän perusteella.',
    'LBL_NO_ID' => 'ID tarvitaan',
    'LBL_PRE_CHECK_SKIPPED' => 'Esitarkastus ohitettiin',
    'LBL_NOLOCALE_NEEDED' => 'Lokaalimuunnosta ei tarvita',
    'LBL_FIELD_NAME' => 'Kentän nimi',
    'LBL_VALUE' => 'Arvo',
    'LBL_ROW_NUMBER' => 'Rivinumero',
    'LBL_NONE' => 'Ei mikään',
    'LBL_REQUIRED_VALUE' => 'Vaadittu arvo puuttuu',
    'LBL_ERROR_SYNC_USERS' => 'Virheellinen arvo Outlookiin synkronoitavaksi:',
    'LBL_ID_EXISTS_ALREADY' => 'ID on jo tässä taulussa',
    'LBL_ASSIGNED_USER' => 'Jos käyttäjää ei ole, käytä nykyistä käyttäjää',
    'LBL_SHOW_HIDDEN' => 'Näytä kentät, jotka eivät ole normaalisti tuotavia',
    'LBL_UPDATE_RECORDS' => 'Päivitä olemassa olevat tietueet tuomisen sijaan (ei kumottavissa)',
    'LBL_TEST'=> 'Testituonti (älä tallenna tai muuta dataa)',
    'LBL_TRUNCATE_TABLE' => 'Tyhjennä taulu ennen tuontia (poistaa kaikki tietueet)',
    'LBL_RELATED_ACCOUNTS' => 'Älä luo liittyviä tilejä',
    'LBL_NO_DATECHECK' => 'Ohita päivämäärän tarkastus (nopeampi, mutta epäonnistuu, jos jokin päivämäärä on väärä)',
    'LBL_NO_WORKFLOW' => 'Älä aja workflowta tuonnin aikana',
    'LBL_NO_EMAILS' => 'Älä lähetä sähköposti-ilmoitusta tuonnin aikana',
    'LBL_NO_PRECHECK' => 'Natiivimuodon tila',
    'LBL_STRICT_CHECKS' => 'Käytä tiukkoja sääntöjä (tarkista myös sähköpostiosoitteet ja puhelinnumerot)',
    'LBL_ERROR_SELECTING_RECORD' => 'Virhe valittaessa tietuetta:',
    'LBL_ERROR_DELETING_RECORD' => 'Virhe poistettaessa tietuetta:',
    'LBL_NOT_SET_UP' => 'Tämän tyyppiselle moduulille ei ole tuontia',
    'LBL_ARE_YOU_SURE' => 'Oletko varma? Tämä poistaa kaikki moduulin tiedot.',
    'LBL_NO_RECORD' => 'Ei päivitettävää tietuetta tällä ID:llä',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Tämän tyyppiselle moduulille ei ole tuontia',
    'LBL_DEBUG_MODE' => 'Ota käyttöön debug-tila',
    'LBL_ERROR_INVALID_ID' => 'Annettu ID on liian pitkä mahtuakseen kenttään (maksimipituus on 36 merkkiä)',
    'LBL_ERROR_INVALID_PHONE' => 'Virheellinen puhelinnumero',
    'LBL_ERROR_INVALID_NAME' => 'Merkkijono liian pitkä mahtuakseen kenttään',
    'LBL_ERROR_INVALID_VARCHAR' => 'Merkkijono liian pitkä mahtuakseen kenttään',
    'LBL_ERROR_INVALID_DATETIME' => 'Virheellinen päivämäärän ja ajan yhdistelmä',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Virheellinen päivämäärän ja ajan yhdistelmä',
    'LBL_ERROR_INVALID_INT' => 'Virheellinen kokonaislukuarvo',
    'LBL_ERROR_INVALID_NUM' => 'Virheellinen numeerinen arvo',
    'LBL_ERROR_INVALID_TIME' => 'Virheellinen aika',
    'LBL_ERROR_INVALID_EMAIL'=>'Virheellinen sähköpostiosoite',
    'LBL_ERROR_INVALID_BOOL'=>'Virheellinen arvo (pitäisi olla 1 tai 0)',
    'LBL_ERROR_INVALID_DATE'=>'Virheellinen päivämäärä',
    'LBL_ERROR_INVALID_USER'=>'Virheellinen käyttäjänimi tai ID',
    'LBL_ERROR_INVALID_TEAM' => 'Virheellinen tiimin nimi tai ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Virheellinen asiakkaan nimi tai ID',
    'LBL_ERROR_INVALID_RELATE' => 'Virheellinen relaatio-kenttä',
    'LBL_ERROR_INVALID_CURRENCY' => 'Virheellinen valuutta-arvo',
    'LBL_ERROR_INVALID_FLOAT' => 'Virheellinen liukuluku',
    'LBL_ERROR_NOT_IN_ENUM' => 'Arvo ei ole pudotusvalikosta. Sallitut arvot ovat:',
    'LBL_ERROR_ENUM_EMPTY' => 'Arvoa ei ole pudotusvalikossa. Pudotusvalikko on tyhjä',
    'LBL_NOT_MULTIENUM' => 'Ei MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Tämän tyyppiselle moduulille ei ole tuontia',
    'LBL_IMPORT_MODULE_NO_USERS' => 'VAROITUS: Järjestelmääsi ei ole määritelty käyttäjiä.    Jos tuot lisäämättä ensin käyttäjiä, kaikki tietueet omistaa Ylläpitäjä.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Ei voida julkaista. Samalla nimellä on jo toinen tuontikuvaus.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Ei voida poistaa toisen käyttäjän omistamaa julkaisua. Sinulla on samanniminen tuontikuvaus.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Hakemistoa',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'ei ole olemassa tai se ei ole kirjoitettavissa',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Tiedostoa ei saatu ladattua. Saattaa olla, että asetus ‘upload_max_filesize’ php.ini-tiedostossasi on liian pieni. Katso myös ‘post_max_size’ -asetus samassa tiedostossa.',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Tiedosto on liian suuri. Maksimi on',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'tavua. Muuta muuttujaa $sugar_config[&#39;upload_maxsize&#39;] tiedostossa config.php',
    'LBL_MODULE_NAME' => 'Tuonti',
    'LBL_MODULE_NAME_SINGULAR' => 'Tuo',
    'LBL_TRY_AGAIN' => 'Yritä uudelleen',
    'LBL_START_OVER' => 'Aloita alusta',
    'LBL_ERROR' => 'Virhe',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Tuotava tiedosto sisältää {0} riviä. Optimaalinen rivien lukumäärä on {1}. Suuri rivimäärä voi hidastaa tuontiprosessia. Napsauta OK jatkaaksesi tuontia. Napsauta Peruuta tarkistaaksesi ja ladataksesi tiedoston myöhemmin uudelleen.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Et voi tuoda järjestelmänvalvoja-käyttäjää',
    'ERR_REPORT_LOOP' => 'Järjestelmä havaitsi raportointisilmukan. Käyttäjä ei voi raportoida itselleen, eivätkä mitkään hänen managereistaan voi raportoida hänelle.',
    'ERR_MULTIPLE' => 'Useita sarakkeita on määritelty samalla kentän nimellä.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Syötä tieto vaadittuihin kenttiin:',
    'ERR_MISSING_MAP_NAME' => 'Puuttuu kuvauksen nimi',
    'ERR_SELECT_FULL_NAME' => 'Et voi valita Koko nimi -kenttää kun kentät Etunimi ja Sukunimi ovat valittuina.',
    'ERR_SELECT_FILE' => 'Valitse ladattava tiedosto.',
    'LBL_SELECT_FILE' => 'Valitse tiedosto:',
    'LBL_CUSTOM' => 'Mukautettu',
    'LBL_CUSTOM_CSV' => 'Mukautettu pilkulla eroteltu tiedosto',
    'LBL_CSV' => 'tiedosto tietokoneeltani',
    'LBL_EXTERNAL_SOURCE' => 'ulkoinen sovellus tai palvelu',
    'LBL_TAB' => 'sarkaineroteltu tiedosto',
    'LBL_CUSTOM_DELIMITED' => 'mukautetusti eroteltu tiedosto',
    'LBL_CUSTOM_DELIMITER' => 'Kenttien erotin:',
    'LBL_FILE_OPTIONS' => 'Tiedoston asetukset',
    'LBL_CUSTOM_TAB' => 'Mukautettu sarkaineroteltu tiedosto',
    'LBL_DONT_MAP' => '- Älä käytä tätä kenttää -',
    'LBL_STEP_MODULE' => 'Mihin moduuliin haluat tuoda tietoja?',
    'LBL_STEP_1_TITLE' => 'Vaihe 1: Valitse tietolähde',
    'LBL_CONFIRM_TITLE' => 'Vaihe {0}: Vahvista tuotavan tiedoston asetukset',
    'LBL_CONFIRM_EXT_TITLE' => 'Vaihe {0}: Vahvista ulkoisen lähteen ominaisuudet',
    'LBL_WHAT_IS' => 'Minun datani sijaitsee:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Mukautetut kuvaukset Microsoft Outlookille perustuvat pilkulla erotettuihin tiedostoihin (.csv). Jos tuotava tiedosto on sarkaineroteltuna, kuvaukset eivät toimi odotetulla tavalla.',
    'LBL_ACT' => 'Toimi!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Voit käyttää tallennettuja tuonnin asetuksia, valitse alta:',
    'LBL_PUBLISH' => 'Julkaise',
    'LBL_DELETE' => 'Poista',
    'LBL_PUBLISHED_SOURCES' => 'Jos haluat käyttää esiasetettuja tuonnin asetuksia, valitse alta:',
    'LBL_UNPUBLISH' => 'Poista julkaisu',
    'LBL_NEXT' => 'Seuraava >',
    'LBL_BACK' => '< Takaisin',
    'LBL_STEP_2_TITLE' => 'Vaihe {0}: Lataa tuotava tiedosto',
    'LBL_HAS_HEADER' => 'Otsikkorivi:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Lisämerkinnät',
    'LBL_NOW_CHOOSE' => 'Valitse nyt se tiedosto tuotavaksi:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ja 2000 voivat viedä tietoja <b>CSV</b>-muodossa, jolla voidaan tuoda tietoja järjestelmään. Viedäksesi tietoja Outlookista, toimi seuraavasti:',
    'LBL_OUTLOOK_NUM_1' => 'Avaa <b> Outlook </b>',
    'LBL_OUTLOOK_NUM_2' => 'Valitse <b> Tiedosto </b>-valikosta, sitten <b> Tuo ja vie ... </b>',
    'LBL_OUTLOOK_NUM_3' => 'Valitse <b>Vie tiedostoon</b> ja napsauta Seuraava',
    'LBL_OUTLOOK_NUM_4' => 'Valitse <b>Comma Separated Values (Windows)</b> ja valitse <b>Seuraava</b>.<br>Huomioi: Sinua saatetaan pyytää asentamaan vientikomponentti',
    'LBL_OUTLOOK_NUM_5' => 'Valitse <b>Yhteystiedot</b>kansio ja napsauta <b>Seuraava</b>. Voit valita eri yhteystietokansioita jos yhteystiedot on tallennettu useisiin kansioihin',
    'LBL_OUTLOOK_NUM_6' => 'Valitse tiedostonimi ja napsauta <b>Seuraava</b>',
    'LBL_OUTLOOK_NUM_7' => 'Napsauta <b>Valmis</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com voi viedä tietoja <b>CSV</b>-muodossa, jolla voidaan tuoda tietoja järjestelmään. Viedäksesi tietoja Salesforce.com:sta, toimi seuraavasti:',
    'LBL_SF_NUM_1' => 'Avaa selain, mene http://www.salesforce.com ja kirjaudu sähköpostiosoitteellasi ja salasanallasi',
    'LBL_SF_NUM_2' => 'Napsauta <b>Reports</b>-välilehteä päävalikosta',
    'LBL_SF_NUM_3' => '<b>Viedäksesi asiakkaita:</b> Klikkaa <b>aktiiviset asikkaat</b> -linkkiä <br /> <b>Viedäksesi yhteystietoja:</b>  Klikkaa <b>Mailing List</b> -linkkiä',
    'LBL_SF_NUM_4' => '<b>Vaiheessa 1: Valitse raportin tyyppi</b>, valitse <b>Tabular Report</b> klikkaa <b>Seuraava</ b>',
    'LBL_SF_NUM_5' => '<b>Vaiheessa 2: Valitse raportin sarakkeet</b>, valitse sarakkeet, jotka haluat viedä ja napsauta <b>Seuraava</b>',
    'LBL_SF_NUM_6' => '<b>Vaiheessa 3: Valitse yhteenvedettävät tiedot</b>, napsauta <b>Seuraava</b>',
    'LBL_SF_NUM_7' => '<b>Vaiheessa 4: Tilaa raporttisarakkeita</b>, napsauta <b>Seuraava</b>',
    'LBL_SF_NUM_8' => '<b>Vaiheessa 5: Valitse raportin kriteerit </b>, valitse ensin <b>Aloituspäivämäärä</b>, valitse päivämäärä tarpeeksi pitkällä mennäisyydessä sisällyttääksesi kaikki asiakkaasi. Voit myös viedä asiakkaiden osajoukon käyttäen kehittyneempiä kriteereitä. Kun olet valmis, valitse <b>Aja raportti</b>',
    'LBL_SF_NUM_9' => 'Raportti luodaan, ja sivulla näytetään <b>Report Generation Status: Complete.</b> Nyt klikkaa <b>Export to Excel</b>',
    'LBL_SF_NUM_10' => 'Valittuasi <b>Vie raportti:</b>, kohtaan <b>Vietävän tiedoston formaatti: </b>, valitse <b> Pilkkueroteltu .Csv </b>. Valitse <b>Vie</ b>.',
    'LBL_SF_NUM_11' => 'Valintaikkuna avautuu, jotta voit tallentaa vietävän tiedoston tietokoneellesi.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! voi viedä datan <b>CSV</b>-muodossa, jolla voidaan tuoda tietoja järjestelmään. Viedäsesi dataa Act!:sta, Toimi seuraavasti:',
    'LBL_ACT_NUM_1' => 'Käynnitä <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Valitse <b>File</b>-valikosta <b>Data Exchange</b>-vaihtoehto, jonka jälkeen <b>Export... </b>',
    'LBL_ACT_NUM_3' => 'Valitse tiedostotyyppi <b>Text-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Valitse tiedoston nimi ja sijainti vietävälle tiedostolle ja napsauta <b>Next</b>',
    'LBL_ACT_NUM_5' => 'Valitse <b>Contact records only</b>',
    'LBL_ACT_NUM_6' => 'Napsauta <b>Options...</b>-painiketta',
    'LBL_ACT_NUM_7' => 'Valitse <b>Comma</b> erotinmerkiksi',
    'LBL_ACT_NUM_8' => 'Valitse <b>Yes, export field names</b>-valintaruutu ja napsauta <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Napsauta <b>Next</b>',
    'LBL_ACT_NUM_10' => 'Valitse <b>All Record</b> ja sitten <b>Finish</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Monet sovellukset voivat antaa viedä dataa muodossa <b>Pilkkueroteltu tekstitiedosto (.Csv)</b>. Seuraa seuraavia ohjelta:',
    'LBL_CUSTOM_NUM_1' => 'Käynnistä sovellus ja avaa data-tiedosto',
    'LBL_CUSTOM_NUM_2' => 'Valitse <b>Save As ...</b> tai <b>Export ...</b>',
    'LBL_CUSTOM_NUM_3' => 'Tallenna tiedosto <b>CSV</b>- eli <b>Comma Separated Values</b> -muodossa',
    'LBL_IMPORT_TAB_TITLE' => 'Monet sovellukset voivat antaa sinun viedä dataa <b>sarkaineroteltuna tekstitiedostona (.TSV tai .tab)</b>. Noudata seuraavia ohjeita:',
    'LBL_TAB_NUM_1' => 'Käynnistä sovellus ja avaa data-tiedosto',
    'LBL_TAB_NUM_2' => 'Valitse <b>Save As ...</b> tai <b>Export ...</b>',
    'LBL_TAB_NUM_3' => 'Tallenna tiedosto <b>TSV</b>- eli <b>Tab Separated Values</b> -muodossa',
    'LBL_STEP_3_TITLE' => 'Vaihe {0}: Vahvista kentän kuvaukset',
    'LBL_STEP_DUP_TITLE' => 'Vaihe {0}: Tarkista mahdolliset duplikaatit',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Valitse alla olevasta luettelosta kentät tuotavaan tiedostoon, jotka pitäisi tuoda kuhunkin järjestelmän kenttään. Kun olet valmis, valitse <b>Seuraava</b>:',
    'LBL_DATABASE_FIELD' => 'Moduulikenttä',
    'LBL_HEADER_ROW' => 'Otsikkorivi',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Valitse, jos tuotavan tiedoston ylin rivi on otsikkorivi, joka sisältää kenttien nimet.',
    'LBL_ROW' => 'Rivi',
    'LBL_SAVE_AS_CUSTOM' => 'Tallenna mukautettu kuvaus:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Mukautetun kuvauksen nimi:',
    'LBL_CONTACTS_NOTE_1' => 'Joko sukunimi tai koko nimi pitää liittää.',
    'LBL_CONTACTS_NOTE_2' => 'Jos koko nimi on liitetty, etunimi ja sukunimi jätetään huomiotta.',
    'LBL_CONTACTS_NOTE_3' => 'Jos koko nimi on liitetty, data kentässä Koko nimi jaetaan etunimeen ja sukunimeen syötettäessä tietokantaan.',
    'LBL_CONTACTS_NOTE_4' => 'Kentät katuosoite 2 ja katuosoite 3 ketjutetaan yhteen kentän katuosoite kanssa, kun data syötetään tietokantaan.',
    'LBL_ACCOUNTS_NOTE_1' => 'Kentät katuosoite 2 ja katuosoite 3 ketjutetaan yhteen kentän katuosoite kanssa, kun data syötetään tietokantaan.',
    'LBL_REQUIRED_NOTE' => 'Pakolliset kentät:',
    'LBL_IMPORT_NOW' => 'Tuo nyt',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Ei voi avata tuotavaa tiedostoa lukemista varten',
    'LBL_NOT_SAME_NUMBER' => 'Tiedostossa ei ollut samaa määrää kenttiä riviä kohden',
    'LBL_NO_LINES' => 'Tuotavassa tiedostossa ei ole laisinkaan rivejä.  Varmista, ettei tiedostossa ole tyhjiä rivejä ja yritä uudelleen.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Tuotava tiedosto on jo käsitelty tai sitä ei löydy',
    'LBL_SUCCESS' => 'Onnistuneet:',
	'LBL_FAILURE' => 'Tuonti epäonnistui:',
    'LBL_SUCCESSFULLY' => 'Tuotiin&nbsp;',
    'LBL_LAST_IMPORT_UNDONE' => 'Tuonti peruutettiin.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Ei tuontia, jota kumota.',
    'LBL_FAIL' => 'Epäonnistuneet:',
    'LBL_RECORDS_SKIPPED' => 'Tietueet ohitettu, koska puuttuu yksi tai useampi tarvittava kenttä',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Tietueet, jotka ohitettiin, koska ID:t joko olivat olemassa tai olivat yli 36-merkkisiä',
    'LBL_RESULTS' => 'Tulokset',
    'LBL_CREATED_TAB' => 'Luodut tietueet',
    'LBL_DUPLICATE_TAB' => 'Duplikaatit',
    'LBL_ERROR_TAB' => 'Virheet',
    'LBL_IMPORT_MORE' => 'Tuo lisää',
    'LBL_FINISHED' => 'Valmiit',
    'LBL_UNDO_LAST_IMPORT' => 'Kumoa tuonti',
    'LBL_LAST_IMPORTED'=>'Luotu',
    'ERR_MULTIPLE_PARENTS' => 'Voit määritellä vain yhden vanhemman ID:n',
    'LBL_DUPLICATES' => 'Duplikaatteja löytyi',
    'LNK_DUPLICATE_LIST' => 'Lataa lista duplikaateista',
    'LNK_ERROR_LIST' => 'Lataa luettelo virheistä',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Lataa lista riveistä, joita ei tuotu',
    'LBL_UNIQUE_INDEX' => 'Valitse indeksi duplikaattien vertailuun',
    'LBL_VERIFY_DUPS' => 'Tarkistaaksesi tietueet, jotka vastaavat tuotavan tiedoston dataa, valitse tarkistettavat kentät.',
    'LBL_INDEX_USED' => 'Tarkistettavat kentät:',
    'LBL_INDEX_NOT_USED' => 'Käytettävissä olevat kentät:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Tiedostoa ei ladattu.    Tarkista tiedoston käyttöoikeudet oman Sugar-asennuksen välimuistista.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Yksilöllinen ID-numero',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nimi tai ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Puhelinnumero',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Tiimin nimi tai ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Mitä tahansa tekstiä',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Mitä tahansa tekstiä',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Mitä tahansa tekstiä',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Aika',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Päivämäärä',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Päivämäärä ja aika',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Käyttäjän nimi tai ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '‘0’ tai ‘1’',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Sähköpostiosoite',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numeerinen (ei desimaaleja)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeerinen (ei desimaaleja)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numeerinen (ei desimaaleja)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeerinen (desimaalit sallittuja)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeerinen (desimaalit sallittuja)',
    'LBL_DATE_FORMAT' => 'Päivämäärän muoto:',
    'LBL_TIME_FORMAT' => 'Ajan muoto:',
    'LBL_TIMEZONE' => 'Aikavyöhyke:',
    'LBL_ADD_ROW' => 'Lisää kenttä',
    'LBL_REMOVE_ROW' => 'Poista kenttä',
    'LBL_DEFAULT_VALUE' => 'Oletusarvo',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Näytä tuotavan tiedoston ominaisuudet',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Piilota tuotavan tiedoston ominaisuudet',
    'LBL_SHOW_NOTES' => 'Näytä muistiot',
    'LBL_HIDE_NOTES' => 'Piilota muistiot',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Näytä esikatselusarakkeet',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Piilota esikatselusarakkeet',
    'LBL_SAVE_MAPPING_AS' => 'Voit tallentaa tuontiasetukset, anna nimi tallennetuille asetuksille:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Heittomerkki (&nbsp;&#39;&nbsp;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Lainausmerkki',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ei mitään',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Muu:',
    'LBL_IMPORT_COMPLETE' => 'Poistu',
    'LBL_IMPORT_COMPLETED' => 'Tuonti on valmis',
    'LBL_IMPORT_ERROR' => 'Tuonnin virheet:',
    'LBL_IMPORT_RECORDS' => 'Tuodaan tietueita',
    'LBL_IMPORT_RECORDS_OF' => 'minkä',
    'LBL_IMPORT_RECORDS_TO' => 'kohteeseen',
    'LBL_CURRENCY' => 'Valuutta:',
    'LBL_SYSTEM_SIG_DIGITS' => 'Merkitseviä numeroita',
    'LBL_NUMBER_GROUPING_SEP' => 'Tuhaterotin:',
    'LBL_DECIMAL_SEP' => 'Desimaalimerkki:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nimen näyttömuoto',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Esimerkki',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<code>&#39;s&#39; = puhuttelumuoto, &#39;f&#39; = etunimi, &#39;l&#39; = sukunimi</code>',
    'LBL_CHARSET' => 'Tiedoston merkistökoodaus:',
    'LBL_MY_SAVED_HELP' => 'Käytä tätä vaihtoehtoa ottaaksesi käyttöön omat esiasetetut tuonnin asetukset, kuten tuontiominaisuudet, kuvaukset ja kaksoiskappaleiden tarkistuksen asetukset. <br/><br/> Paina <b>poista</b> poistaaksesi linkityksen kaikilta käyttäjiltä.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Käytä tätä vaihtoehtoa ottaaksesi käyttöön omat esiasetetut tuonnin asetukset, kuten tuontiominaisuudet, kuvaukset ja kaksoiskappaleiden tarkistuksen asetukset, tähän tuontiin. <br/> Klikkaa <b> Julkaise </b> tehdäksesi linkitykset näkyviksi muille käyttäjille. <br/> Klikkaa <b>poista julkaisu</b> poistaaksesi linkityksen muiden näkyvistä. <br/> <b> Poista </b> poistaa linkityksen kaikilta käyttäjiltä.',
    'LBL_MY_PUBLISHED_HELP' => 'Käytä tätä vaihtoehtoa soveltamaan ennalta asetettuja tuontiasetuksia, kuten tuontiominaisuudet, kuvaukset, ja kaksoiskappaleiden tarkistuksen asetukset.',
    'LBL_ENCLOSURE_HELP' => '<p> <b>Tarkennemerkkiä</b> käytetään sulkemaan sisälleen kentän sisältö, mukaan lukien merkit, joita käytetään erottimina.</p><p>Esimerkki: Jos erotin on pilkku (,) ja tarkenne on lainausmerkki, <b>”Cupertino, Kalifornia”</b> tuodaan yhteen kenttään ja näkyy järjestelmässä muodossa <b>Cupertino, Kalifornia</b>.</p><p>Jos tarkennemerkkejä ei käytetä, tai jos tarkennemerkkinä on muu merkki, <b>”Cupertino, Kalifornia”</b> tuodaan kahteen vierekkäiseen kenttään ja näkyy järjestelmässä erillisinä arvoina <b> Cupertino </b> ja <b> Kalifornia </b>. </p><p>Huomio: tuotu tiedosto ei ehkä sisällä lainkaan tarkennemerkkejä. Oletusarvoinen tarkennemerkki Excelissä luoduille CSV-tiedostoille on lainausmerkki. </p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Käytä tätä vaihtoehtoa valitaksesi ja lataaksesi taulukkolaskentatiedosto, joka sisältää tiedot, jotka haluat tuoda. Esimerkkejä: pilkulla erotettu .csv-tiedosto tai tiedoston vienti Microsoft Outlookista.',
    'LBL_DELIMITER_TAB_HELP' => 'Valitse tämä vaihtoehto, jos tuotavan tiedoston kentät erottava merkki on <b>sarkain</b>, ja tiedostotunniste on .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Valitse tämä vaihtoehto, jos tuotavan tiedoston kentät erottava merkki ei ole pilkku eikä sarkain, ja kirjoita merkki viereiseen kenttään.',
    'LBL_DATABASE_FIELD_HELP' => 'Tämä sarake näyttää moduulin kaikki kentät. Valitse kenttä, joka linkitetään tuotavan tiedoston rivien dataan.',
    'LBL_HEADER_ROW_HELP' => 'Tämä sarake näyttää tuotavan tiedoston otsikkorivin.',
    'LBL_DEFAULT_VALUE_HELP' => 'Määrää arvo, jota käytetään luodun tai päivitetyn tietueen kenttään, jos tuotavan tiedoston kenttä ei sisällä dataa.',
    'LBL_ROW_HELP' => 'Tämä sarake näyttää tiedot ensimmäisellä ei-otsikkorivillä tuotavassa tiedostossa. Jos otsikkorivin arvot näkyvät tässä sarakkeessa, valitse Takaisin määrittääksesi otsikkorivin tuotavan tiedoston ominaisuuksissa.',
    'LBL_SAVE_MAPPING_HELP' => 'Anna nimi tallentaaksesi tuonnin asetukset, kuten kenttien linkitykset ja indeksit, joita käytetään duplikaattien tarkastukseen. Tallennettuja tuontiasetuksia voi käyttää tulevaisuudessa tuontiin.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Ladatessasi tuonnin tiedostoa, jotkut tiedoston ominaisuuksista on voitu tunnistaa automaattisesti. Tarkastele ja hallinnoi näitä ominaisuuksia tarpeen <br/> mukaan. Huom: Tässä annetut asetukset liittyvät tähän tuontiin, <br/> eivätkä muuta yleisiä käyttäjäasetuksia.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Etsi olemassa olevia tietueita, joka voidaan pitää tuotavien tietueiden duplikaatteina suorittamalla duplikaattitarkastus yhtedeväisen datan löytämiseen.  Kenttiä, jotka on vedetty Tarkista data sarakkeeseen, käytetään duplikaattien tarkastukseen. Tuotavan tiedoston rivit, jotka sisältävät yhtenevää dataa, listataan seuraavalla sivulla, ja voit valita, mitkä rivit tuodaan',
    'LBL_IMPORT_STARTED' => 'Tuonti aloitettu:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Tuotavan tiedoston asetukset',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Tietuetta ei voida päivittää lupaongelman takia',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Oletko varma, että haluat poistaa tämän tallennettujen tuontiasetusten joukon?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Jos tuotavan tiedoston data vietiin jostakin seuraavista lähteistä, valitse se.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Yksinkertaistaaksesi linkitysprosessia (seuraava vaihe) valitse lähde, jotta käyttäisit automaattisesti mukautettuja kuvauksia.',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Käytä tätä vaihtoehtoa tuodaksesi dataa suoraan ulkoisesta sovelluksesta tai palvelusta, kuten Gmailista.',
    'LBL_EXAMPLE_FILE' => 'Lataa tuotavan tiedoston pohja',
    'LBL_CONFIRM_IMPORT' => 'Olet valinnut päivittäväsi tietueet tuonnin aikana. Olemassa oleviin tietueisiin tehtyjä päivityksiä ei voi perua. Tuonnin aikana luodut tietueet voidaan kuitenkin kumota (poistaa) tarpeen mukaan. Valitse Peruuta luodaksesi vain uusia tietueita tai jatka prosessia normaalisti valitsemalla OK.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Varoitus: Olet jo valinnut mukautetun kuvauksen tälle tuonnille, haluatko jatkaa?',
    'LBL_EXTERNAL_FIELD' => 'Ulkoinen kenttä',
    'LBL_SAMPLE_URL_HELP' => 'Lataa näyte tuontitiedostosta, joka sisältää otsikkorivillä moduulin kentät. Tiedosto voidaan käyttää mallina tuontitiedoston luomiseen.',
    'LBL_AUTO_DETECT_ERROR' => 'Tuotavassa tiedostossa ei voitu havaita kentän erotinta ja tarkennemerkkiä. Varmista asetukset tuotavan tiedoston asetuksista.',
    'LBL_MIME_TYPE_ERROR_1' => 'Valittu tiedosto ei näytä sisältävän eroteltua listaa. Tarkista tiedostotyyppi. Suosittelemme pilkuin eroteltuja tiedostoja (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Jatkaaksesi tiedoston tuontia, valitse OK. Valitse Yritä uudelleen ladataksesi uuden tiedoston',
    'LBL_FIELD_DELIMETED_HELP' => 'Kentän erotin määrittää merkin, jota käytetään erottamaan sarakkeita.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Valitse tiedosto, joka sisältää tietoja, jotka on erotettu erottimella. Tällaisia ovat pilkku- tai sarkainerotellut tiedostot. Tiedostomuoto .csv on suositeltu.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Ei voitu hakea lähdeadapteria, yritä myöhemmin uudelleen.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Ei voitu hakea ulkoista syötettä, yritä myöhemmin uudelleen.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Tuonnin välimuistihakemistoon ei voi kirjoittaa.',
    'LBL_ADD_FIELD_HELP' => 'Käytä tätä vaihtoehtoa lisääksesi arvon kentään kaikissa luoduissa tai päivitetyissä tietueissa. Valitse kenttä ja sitten kirjoita tai valitse arvo kentän Oletusarvo-sarakkeeseen.',
    'LBL_MISSING_HEADER_ROW' => 'Otsikkoriviä ei löytynyt',
    'LBL_CANCEL' => 'Peruuta',
    'LBL_SELECT_DS_INSTRUCTION' => 'Jos olet valmis aloittamaan tuonnin, valitse tuotavan datan lähde.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Valitse tietokoneeltasi tiedosto, joka sisältää tuotavat tiedot, tai lataa mallipohja.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Tässä havaitset, miten ensimmäiset muutama riviä näkyvät annetuilla tuonnin ominaisuuksilla. Jos otsikkorivi havaittiin, se näkyy taulukon ylärivinä. Tarkastele tuonnin ominaisuuksia tehdäksesi muutoksia. Asetusten päivittäminen päivittää tiedot taulukossa.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Alla oleva taulukko sisältää kaikki moduulin kentät, jotka voidaan kuvata tuotavan tiedoston dataan. Jos tiedosto sisältää otsikkorivin, sarakkeet on liitetty vastaaviin kenttiin. Tarkista kuvaukset varmistaaksesi, että ne ovat mielestäsi oikein, ja tee muutoksia tarvittaessa. Rivi 1 näyttää tiedoston tiedot. Muista linkittää kaikki pakolliset kentät (merkitty tähdellä).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Jotta vältettäisiin duplikaattitietueet, valitse mitä linkitetyistä kentistä haluat käyttää duplikaattien tarkistamiseen tuonnin yhteydessä. Olemassa olevien tietueiden arvot tarkastetaan tuotavaa dataa vastaan valittujen kenttien osalta. Jos yhteneviä tietoja löytyy, tuotavan tiedoston duplikaattirivit näytetään tulossivulla (seuraava sivu). Tällöin voit valita, mitä näistä riveistä haluat vielä tuoda.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Kirjaudu sisään',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Kirjaudu ulos',
    'LBL_DUP_HELP' => 'Tässä on tuotavan tiedoston rivit, joita ei tuotu, koska ne sisältävät duplikaattitestin mukaan nykyisten tietuiden arvoja vastaavia tietoja. Duplikaattitiedot on korostettu. Tuodaksesi nämä rivit uudelleen, lataa lista, tee tarvittavat muutokset ja valitse <b> Tuo uudelleen </b>.',
    'LBL_DESELECT' => 'Poista valinta',
    'LBL_SUMMARY' => 'Yhteenveto',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Tässä ovat rivit, joita ei tuotu virheiden takia. Tuodaksesi nämä rivit uudelleen, lataa luettelo, tee tarvittavat muutokset ja valitse <b> Tuo uudelleen </b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Alla oleva taulukko sisältää niin ulkoisen lähteen kentät kuin myös moduulin linkitettävät kentät. Tarkista kuvaukset varmistaaksesi, että ne ovat mielestäsi oikein, ja tee muutoksia tarvittaessa. Muista linkittää kaikki pakolliset kentät (merkitty tähdellä).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Tuontia yritetään kaikkien Google Contacts -ryhmien kontakteille.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Uusien käyttäjien käyttäjänimet ovat oletusarvoisesti Google Contact -kontaktien koko nimet. Käyttäjänimet voi muuttaa, jahka uudet tietueet on luotu.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Valitse <b> Tuo nyt </b> aloittaaksesi tuonnin. Tietueet luodaan ainoastaan syötteille, jotka sisältävät koko nimen, mukaanlukien sukunimen. Tietueita ei luoda datalle, joka havaitaan duplikaatiksi nimien tai sähköpostin perusteella.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Tämä sarake näyttää ulkoisen lähteen kentät, jotka sisältävät dataa, jota käytetään uusien tietueiden luonnissa.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Anna arvo, jota käytetään, ellei tuotava data sisällä arvoa tälle kentälle.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Määrittääksesi uusia tietueita jollekin toiselle käyttäjälle, käytä Oletusarvo-saraketta valitaksesi eri käyttäjän.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Osoittaaksesi uudet tietueet jollekin muulle kuin oletustiimillesi, käytä Oletusarvo-saraketta valitaksesi toisen tiimin.',
    'LBL_SIGN_IN_HELP' => 'Mahdollistaaksesi tämän palvelun käytön, kirjaudu sisään Ulkoiset tilit -kohdassa Käyttäjän asetukset -sivulla.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Yritetään käsitellä sähköpostiosoitteita Beanissa, joka ei tue niitä.",
);
