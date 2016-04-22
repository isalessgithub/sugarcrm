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
  'COLUMN_TITLE_FTS' => 'Recherchable en Full Text',
  'LBL_HAS_PARENT' => 'A un parent',
  'LBL_PARENT_DROPDOWN' => 'Liste des parents',
  'LBL_EDIT_VIS' => 'Editer la visibilité',
  'LNK_NOTE_LIST' => 'Notes',
  'LNK_EMAIL_LIST' => 'Emails',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_AUDIT' => 'Audit',
  'LBL_MODULE' => 'Module',
  'COLUMN_TITLE_IMPORTABLE' => 'Importable',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_EMAIL' => 'Archiver Email',
  'LNK_CALL_LIST' => 'Appels',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_TASK_LIST' => 'Tâches',
  'LBL_ADD_FIELD' => 'Ajouter champ:',
  'LBL_MODULE_SELECT' => 'Module à éditer',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher Module',
  'COLUMN_TITLE_NAME' => 'Nom du champ',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Libellé affiché',
  'COLUMN_TITLE_LABEL_VALUE' => 'Valeur du libellé',
  'COLUMN_TITLE_LABEL' => 'Libellé système',
  'COLUMN_TITLE_DATA_TYPE' => 'type de donnée',
  'COLUMN_TITLE_MAX_SIZE' => 'Taille max',
  'COLUMN_TITLE_HELP_TEXT' => 'Texte d&#39;aide',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Commentaire',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Champ obligatoire',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Valeur par défaut',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Valeur par défaut',
  'COLUMN_TITLE_EXT1' => 'Meta additionnel champ 1',
  'COLUMN_TITLE_EXT2' => 'Meta additionnel champ 2',
  'COLUMN_TITLE_EXT3' => 'Meta additionnel champ 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Hauteur iFrame',
  'COLUMN_TITLE_URL' => 'URL par défaut',
  'COLUMN_TITLE_REPORTABLE' => 'Utilisable dans rapports',
  'COLUMN_TITLE_MIN_VALUE' => 'Valeur min',
  'COLUMN_TITLE_MAX_VALUE' => 'Valeur max',
  'COLUMN_TITLE_LABEL_ROWS' => 'Lignes',
  'COLUMN_TITLE_LABEL_COLS' => 'Colonnes',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# enregistrements affichés',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto incrément valeur suivante',
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Désactiver le formatage',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Activer la recherche par intervale',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Recherche globale',
  'LBL_DROP_DOWN_LIST' => 'Liste déroulante',
  'LBL_RADIO_FIELDS' => 'Bouton radio',
  'LBL_MULTI_SELECT_LIST' => 'Liste multivaleur',
  'COLUMN_TITLE_PRECISION' => 'Précision',
  'MSG_DELETE_CONFIRM' => 'Etes-vous sûr de vouloir effacer cet élément ?',
  'POPUP_INSERT_HEADER_TITLE' => 'Ajouter champ personnalisé',
  'POPUP_EDIT_HEADER_TITLE' => 'Editer champ personnalisé',
  'LNK_SELECT_CUSTOM_FIELD' => 'Sélectionner le champ personnalisé',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Réparer les champs personnalisés',
  'COLUMN_TITLE_MASS_UPDATE' => 'Mise à jour globale',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Fusion de doublons',
  'LBL_LABEL' => 'Libellé',
  'LBL_DATA_TYPE' => 'Type de donnée',
  'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
  'LBL_AUDITED' => 'Audité',
  'LBL_REPORTABLE' => 'Utilisable dans rapports',
  'ERR_RESERVED_FIELD_NAME' => 'Mot clef réservé',
  'ERR_SELECT_FIELD_TYPE' => 'Veuillez sélectionner un type de champ',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Ce nom est déjà utilisé par un autre champ',
  'LBL_BTN_ADD' => 'Ajouter',
  'LBL_BTN_EDIT' => 'Editer',
  'LBL_GENERATE_URL' => 'Générer l&#39;URL',
  'LBL_DEPENDENT_CHECKBOX' => 'Dépendant',
  'LBL_DEPENDENT_TRIGGER' => 'Déclencheur',
  'LBL_CALCULATED' => 'Calculé',
  'LBL_FORMULA' => 'Formule',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dépendant',
  'LBL_BTN_EDIT_VISIBILITY' => 'Editer la visibilité',
  'LBL_LINK_TARGET' => 'Ouvrir Link In',
  'LBL_IMAGE_WIDTH' => 'Largeur',
  'LBL_IMAGE_HEIGHT' => 'Hauteur',
  'LBL_IMAGE_BORDER' => 'Bordure',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Format U.S.',
  'LBL_DEPENDENT' => 'Dépendant',
  'LBL_VISIBLE_IF' => 'Visible si',
  'LBL_ENFORCED' => 'Forcé',
  'LBL_HELP' => 'Aide',
);

