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
  'ERR_DELETE_RECORD' => 'Un enregistrement doit être sélectionné pour toute suppression.',
  'LABEL_PANEL_ASSIGNMENT' => 'Assignation',
  'LBL_ACCOUNT_ID' => 'Compte (ID)',
  'LBL_ACCOUNT_NAME' => 'Compte:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à Réaliser',
  'LBL_AMOUNT' => 'Montant:',
  'LBL_AMOUNT_USDOLLAR' => 'Montant (devise par défaut):',
  'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID)',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_CAMPAIGN' => 'Campagne:',
  'LBL_CAMPAIGN_LINK' => 'Campagne',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Affaires cloturées et gagnées',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Historique des emails des contacts liés',
  'LBL_CONTRACTS' => 'Contrats',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contrats',
  'LBL_CREATED_ID' => 'Créé par (ID)',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_CURRENCIES' => 'Devises',
  'LBL_CURRENCY' => 'Devise:',
  'LBL_CURRENCY_ID' => 'Devise (ID)',
  'LBL_CURRENCY_NAME' => 'Devise',
  'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise',
  'LBL_DATE_CLOSED' => 'Date de Clôture:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affaires',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_DUPLICATE' => 'Possibilité de duplication des Affaires',
  'LBL_EDITLAYOUT' => 'Editer la mise en page',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Campagne (ID)',
  'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
  'LBL_EXPORT_NAME' => 'Nom',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
  'LBL_INVITEE' => 'Contacts',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_SOURCE' => 'Origine Principale:',
  'LBL_LIST_ACCOUNT_NAME' => 'Compte',
  'LBL_LIST_AMOUNT' => 'Montant Affaire',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Montant',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_LIST_DATE_CLOSED' => 'Clôture',
  'LBL_LIST_FORM_TITLE' => 'Liste des Affaires',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Affaires',
  'LBL_LIST_SALES_STAGE' => 'Phase de vente',
  'LBL_MODIFIED_ID' => 'Modifié par (ID)',
  'LBL_MODIFIED_NAME' => 'Modifié par',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Affaires',
  'LBL_MODULE_TITLE' => 'Affaires',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mes Affaires clôturées',
  'LBL_NAME' => 'Nom Affaire',
  'LBL_NEW_FORM_TITLE' => 'Créer une Affaire',
  'LBL_NEXT_STEP' => 'Prochaine étape:',
  'LBL_OPPORTUNITY' => 'Affaire:',
  'LBL_OPPORTUNITY_NAME' => 'Nom Affaire:',
  'LBL_OPPORTUNITY_TYPE' => 'Type',
  'LBL_PROBABILITY' => 'Probabilité (%):',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Devis',
  'LBL_RAW_AMOUNT' => 'Montant Brut',
  'LBL_SALES_STAGE' => 'Phase de vente:',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Affaire',
  'LBL_TEAM_ID' => 'Equipe (ID)',
  'LBL_TOP_OPPORTUNITIES' => 'Top des Affaires',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total des Affaires',
  'LBL_TYPE' => 'Type:',
  'LBL_VIEW_FORM_TITLE' => 'Vue Affaire',
  'LNK_IMPORT_OPPORTUNITIES' => 'Import Affaires',
  'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
  'LNK_OPPORTUNITY_LIST' => 'Affaires',
  'LNK_OPPORTUNITY_REPORTS' => 'Rapports sur les Affaires',
  'MSG_DUPLICATE' => 'Possibilité de doublon avec une Affaire existante. La liste ci-dessous reprend les Affaires similaires. Vous pouvez soit en sélectionner une dans la liste ci-dessous, soit cliquer sur "Sauvegarder" pour poursuivre la création, soit cliquer sur "Annuler".',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Etes-vous sûr de vouloir supprimer ce contact pour cette Affaire ?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr de vouloir supprimer cette Affaire de ce Projet ?',
  'UPDATE' => 'Affaire - Devise mise à jour',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs trouvés:',
  'UPDATE_BUG_COUNT' => 'Bugs trouvés, tentative de correction:',
  'UPDATE_COUNT' => 'Enregistrement mis à jour:',
  'UPDATE_CREATE_CURRENCY' => 'Créer une devise:',
  'UPDATE_DOLLARAMOUNTS' => 'Mise à jour des montants en devise par défaut',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Mise à jour des montants des Affaires basés sur le cours actuel des devises.',
  'UPDATE_DONE' => 'Terminé',
  'UPDATE_FAIL' => 'Impossible de mettre à jour -',
  'UPDATE_FIX' => 'Réparer les montants',
  'UPDATE_FIX_TXT' => 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base.',
  'UPDATE_INCLUDE_CLOSE' => 'Inclure enregistrements clos',
  'UPDATE_MERGE' => 'Fusionner les devises',
  'UPDATE_MERGE_TXT' => 'Fusionner les devises. Si vous notez qu&#39;il y a plusieurs devises enregistrées pour la même devise, vous pouvez choisir de les fusionner. Cela va également fusionner les devises pour tous les autres modules.',
  'UPDATE_NULL_VALUE' => 'Le montant est NULL à remplacer par 0 -',
  'UPDATE_RESTORE' => 'Restaurer les montants',
  'UPDATE_RESTORE_COUNT' => 'Montants enregistrés restaurés:',
  'UPDATE_RESTORE_TXT' => 'Restaurer les montants depuis le backup créé lors de la réparation.',
  'UPDATE_VERIFY' => 'Vérifier les montants',
  'UPDATE_VERIFY_CURAMOUNT' => 'Montant actuel:',
  'UPDATE_VERIFY_FAIL' => 'Echec de Verification de l&#39;enregistrement:',
  'UPDATE_VERIFY_FIX' => 'Lancer la réparation',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nouveau Montant:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nouvelle devise:',
  'UPDATE_VERIFY_TXT' => 'Vérifie que les montants des Affaires contiennent des valeurs numériques correctes (valeures numériques (0-9) et décimale (.)',
);

