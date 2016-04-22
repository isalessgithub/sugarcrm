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
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, żeby usunąc ten produkt.',
  'LBL_ACCOUNT_ID' => 'ID kontrahenta',
  'LBL_ACCOUNT_NAME' => 'Nazwa kontrahenta:',
  'LBL_ASSET_NUMBER' => 'Numer serwisowy producenta:',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do:',
  'LBL_BOOK_VALUE' => 'Wartość księgowa:',
  'LBL_BOOK_VALUE_DATE' => 'Data wyceny wartości księgowej:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Wartość księgowa (PLN):',
  'LBL_CATEGORY' => 'Kategoria:',
  'LBL_CATEGORY_NAME' => 'Nazwa kategorii:',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACT_ID' => 'ID kontaktu',
  'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
  'LBL_CONTRACTS' => 'Umowy',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Umowy',
  'LBL_COST_PRICE' => 'Koszt:',
  'LBL_COST_USDOLLAR' => 'Koszt (PLN)',
  'LBL_CREATED_USER' => 'Użytkownik tworzący',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_CURRENCY_ID' => 'ID waluty:',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Nazwa symbolu waluty',
  'LBL_DATE_PURCHASED' => 'Kupiono:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Gwarancja wygasa:',
  'LBL_DATE_SUPPORT_STARTS' => 'Gwarancja rozpoczyna się:',
  'LBL_DEAL_TOT' => 'Kwota rabatu:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Produkty',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DISCOUNT_AMOUNT' => 'Cena po rabacie',
  'LBL_DISCOUNT_PRICE' => 'Cena za sztukę:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Data obniżki ceny:',
  'LBL_DISCOUNT_RATE' => 'Stawka rabatu',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Stawka rabatu (PLN)',
  'LBL_DISCOUNT_TOTAL' => 'Całkowity rabat',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Kwota rabatu (PLN)',
  'LBL_DISCOUNT_USDOLLAR' => 'Cena po rabacie (PLN)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_EDITLAYOUT' => 'Edytuj widok',
  'LBL_EXPORT_CURRENCY_ID' => 'ID waluty',
  'LBL_EXT_PRICE' => 'Kwota calkowita',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
  'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
  'LBL_LIST_COST_PRICE' => 'Koszt',
  'LBL_LIST_DATE_PURCHASED' => 'Kupione',
  'LBL_LIST_DISCOUNT_PRICE' => 'Cena',
  'LBL_LIST_FORM_TITLE' => 'Lista produktów',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Nr wg producenta',
  'LBL_LIST_LIST_PRICE' => 'Cena katalogowa',
  'LBL_LIST_MANUFACTURER' => 'Producent',
  'LBL_LIST_NAME' => 'Produkt',
  'LBL_LIST_PRICE' => 'Cennik:',
  'LBL_LIST_QUANTITY' => 'Ilość',
  'LBL_LIST_QUOTE_NAME' => 'Nazwa oferty',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Wygasa',
  'LBL_LIST_USDOLLAR' => 'Cennik (PLN)',
  'LBL_MANUFACTURER' => 'Producent:',
  'LBL_MEMBER_OF' => 'Należy do:',
  'LBL_MFT_PART_NUM' => 'Nr kat. producenta:',
  'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
  'LBL_MODULE_NAME' => 'Produkty',
  'LBL_MODULE_TITLE' => 'Produkty: Strona główna',
  'LBL_NAME' => 'Produkt:',
  'LBL_NEW_FORM_TITLE' => 'Utwórz produkt',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notatki',
  'LBL_PRICING_FACTOR' => 'Współczynnik wyceny',
  'LBL_PRICING_FORMULA' => 'Formuła wyceny:',
  'LBL_PRODUCT' => 'Produkt:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
  'LBL_PRODUCT_CATEGORIES' => 'Kategorie produktów',
  'LBL_PRODUCT_TEMPLATE_ID' => 'ID szablonu produktu',
  'LBL_PRODUCT_TYPES' => 'Typy produktów',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_QUANTITY' => 'Ilość:',
  'LBL_QUOTE' => 'Oferty',
  'LBL_QUOTE_ID' => 'ID oferty',
  'LBL_QUOTE_NAME' => 'Nazwa oferty:',
  'LBL_RELATED_PRODUCTS' => 'Powiązane produkty',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Produkty powiązane',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie produktu',
  'LBL_SELECT_DISCOUNT' => 'Rabat w %',
  'LBL_SERIAL_NUMBER' => 'Numer seryjny:',
  'LBL_STATUS' => 'Status:',
  'LBL_SUPPORT_CONTACT' => 'Kontakt do gwaranta:',
  'LBL_SUPPORT_DESCRIPTION' => 'Typ gwarancji:',
  'LBL_SUPPORT_NAME' => 'Gwarant:',
  'LBL_SUPPORT_TERM' => 'Okres gwarancji:',
  'LBL_TAX_CLASS' => 'Obowiązek podatkowy:',
  'LBL_TYPE' => 'Typ produktu:',
  'LBL_URL' => 'Link do produktu:',
  'LBL_VENDOR_PART_NUM' => 'Nr kat. sprzedawcy:',
  'LBL_WEBSITE' => 'Strona www',
  'LBL_WEIGHT' => 'Waga:',
  'LNK_IMPORT_PRODUCTS' => 'Import produktów',
  'LNK_NEW_PRODUCT' => 'Utwórz produkt',
  'LNK_PRODUCT_LIST' => 'Produkty',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunąć tę zależność produktu?',
);

