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
  'LBL_EDITLAYOUT' => 'Úprava rozvržení',
  'LBL_MODULE_NAME' => 'Produkty',
  'LBL_MODULE_TITLE' => 'Produkty: Hlavní stránka',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání produktů',
  'LBL_LIST_FORM_TITLE' => 'Seznam produktů',
  'LBL_NEW_FORM_TITLE' => 'Vytvořit produkt',
  'LBL_PRODUCT' => 'Produkt:',
  'LBL_RELATED_PRODUCTS' => 'Související produkty',
  'LBL_LIST_NAME' => 'Produkt',
  'LBL_LIST_MANUFACTURER' => 'Výrobce',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Výrobní číslo',
  'LBL_LIST_QUANTITY' => 'Množství',
  'LBL_LIST_COST_PRICE' => 'Náklady',
  'LBL_LIST_DISCOUNT_PRICE' => 'Cena',
  'LBL_LIST_LIST_PRICE' => 'Seznam',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_LIST_ACCOUNT_NAME' => 'Název společnosti',
  'LBL_LIST_CONTACT_NAME' => 'Jméno kontaktu',
  'LBL_LIST_QUOTE_NAME' => 'Název kvóty',
  'LBL_LIST_DATE_PURCHASED' => 'Zakoupeno',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Končí',
  'LBL_NAME' => 'Produkt:',
  'LBL_URL' => 'URL produktu:',
  'LBL_QUOTE_NAME' => 'Jméno kvóty:',
  'LBL_CONTACT_NAME' => 'Jméno kontaktu:',
  'LBL_DATE_PURCHASED' => 'Zakoupeno:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Podpora končí:',
  'LBL_DATE_SUPPORT_STARTS' => 'Podpora začíná:',
  'LBL_COST_PRICE' => 'Náklady:',
  'LBL_DISCOUNT_PRICE' => 'Cena za jednotku:',
  'LBL_DEAL_TOT' => 'Sleva:',
  'LBL_DISCOUNT_RATE' => 'Slevová sazba',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Slevová sazba (US Dollar)',
  'LBL_DISCOUNT_TOTAL' => 'Celkem sleva',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Sleva (US Dollar)',
  'LBL_SELECT_DISCOUNT' => 'Sleva v %',
  'LBL_LIST_PRICE' => 'Poslední cena:',
  'LBL_VENDOR_PART_NUM' => 'Číslo dílu prodejce',
  'LBL_MFT_PART_NUM' => 'Číslo dílu výrobce',
  'LBL_DISCOUNT_PRICE_DATE' => 'Datum slevy:',
  'LBL_WEIGHT' => 'Váha:',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CATEGORY' => 'Kategorie:',
  'LBL_QUANTITY' => 'Množství:',
  'LBL_STATUS' => 'Stav:',
  'LBL_TAX_CLASS' => 'Daňová třída:',
  'LBL_MANUFACTURER' => 'Výrobce:',
  'LBL_SUPPORT_DESCRIPTION' => 'Popis podpory:',
  'LBL_SUPPORT_TERM' => 'Tým podpory:',
  'LBL_SUPPORT_NAME' => 'Název podpory:',
  'LBL_SUPPORT_CONTACT' => 'Kontakt podpory:',
  'LBL_PRICING_FORMULA' => 'Cenový vzorec:',
  'LBL_ACCOUNT_NAME' => 'Název společnosti:',
  'LNK_PRODUCT_LIST' => 'Zobrazit produkty',
  'LNK_NEW_PRODUCT' => 'Vytvořit produkt',
  'NTC_DELETE_CONFIRMATION' => 'Jste si jisti, že chcete smazat tento záznam?',
  'NTC_REMOVE_CONFIRMATION' => 'Jste si jisti, že chcete odebrat tuto vazbu?',
  'ERR_DELETE_RECORD' => 'Musíte zadat číslo záznamu pro smazání daného produktu.',
  'LBL_CURRENCY' => 'Měna:',
  'LBL_ASSET_NUMBER' => 'Inventární číslo:',
  'LBL_SERIAL_NUMBER' => 'Sériové číslo:',
  'LBL_BOOK_VALUE' => 'Účetní hodnota:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Účetní hodnota (US Dollar):',
  'LBL_BOOK_VALUE_DATE' => 'Datum účetní hodnoty',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Produkty',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Související produkty',
  'LBL_WEBSITE' => 'Web',
  'LBL_COST_USDOLLAR' => 'Cena (US Dollar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Cena za jednotku (US Dollar)',
  'LBL_LIST_USDOLLAR' => 'Poslední cena (US Dollar)',
  'LBL_PRICING_FACTOR' => 'Faktor cen',
  'LBL_ACCOUNT_ID' => 'ID společnosti',
  'LBL_CONTACT_ID' => 'ID kontaktu',
  'LBL_CATEGORY_NAME' => 'Název kategorie:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Poznámky',
  'LBL_MEMBER_OF' => 'Členem:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakty',
  'LBL_CONTRACTS' => 'Kontrakty',
  'LBL_PRODUCT_CATEGORIES' => 'Kategorie produktů',
  'LBL_PRODUCT_TYPES' => 'Typy produktů',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno komu:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'ID produktové šablony:',
  'LBL_QUOTE_ID' => 'ID kvóty',
  'LBL_CREATED_USER' => 'Vytvořeno uživatelem',
  'LBL_MODIFIED_USER' => 'Upraveno uživatelem',
  'LBL_QUOTE' => 'Kvóta',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_DISCOUNT_AMOUNT' => 'Výše slevy',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Jméno symbolu měny',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
  'LNK_IMPORT_PRODUCTS' => 'Importovat produkty',
  'LBL_EXPORT_CURRENCY_ID' => 'ID měny',
);

