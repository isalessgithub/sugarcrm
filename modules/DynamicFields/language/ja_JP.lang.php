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
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_TASK' => 'タスク作成',
  'LNK_NEW_NOTE' => 'メモ作成',
  'LNK_NEW_EMAIL' => '電子メールアーカイブ',
  'LNK_CALL_LIST' => '電話',
  'LNK_MEETING_LIST' => '会議',
  'LNK_TASK_LIST' => 'タスク',
  'LNK_NOTE_LIST' => 'メモ',
  'LNK_EMAIL_LIST' => '電子メール',
  'LBL_ADD_FIELD' => 'フィールド追加:',
  'LBL_MODULE_SELECT' => '編集モジュール',
  'LBL_SEARCH_FORM_TITLE' => 'モジュール検索',
  'COLUMN_TITLE_NAME' => 'フィールド名',
  'COLUMN_TITLE_DISPLAY_LABEL' => '表示ラベル',
  'COLUMN_TITLE_LABEL_VALUE' => 'ラベル値',
  'COLUMN_TITLE_LABEL' => 'システムラベル',
  'COLUMN_TITLE_DATA_TYPE' => 'データタイプ',
  'COLUMN_TITLE_MAX_SIZE' => '最大値',
  'COLUMN_TITLE_HELP_TEXT' => 'ヘルプテキスト',
  'COLUMN_TITLE_COMMENT_TEXT' => 'コメントテキスト',
  'COLUMN_TITLE_REQUIRED_OPTION' => '必須フィールド',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'デフォルト値',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'デフォルト値',
  'COLUMN_TITLE_EXT1' => '追加メタフィールド 1',
  'COLUMN_TITLE_EXT2' => '追加メタフィールド 2',
  'COLUMN_TITLE_EXT3' => '追加メタフィールド 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrameの高さ',
  'COLUMN_TITLE_URL' => 'デフォルトURL',
  'COLUMN_TITLE_AUDIT' => '監査',
  'COLUMN_TITLE_FTS' => 'フルテキスト検索可',
  'COLUMN_TITLE_REPORTABLE' => 'レポート可',
  'COLUMN_TITLE_MIN_VALUE' => '最小値',
  'COLUMN_TITLE_MAX_VALUE' => '最大値',
  'COLUMN_TITLE_LABEL_ROWS' => '行',
  'COLUMN_TITLE_LABEL_COLS' => 'カラム',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# 個のアイテムが表示されています',
  'COLUMN_TITLE_AUTOINC_NEXT' => '自動インクリメントの次の値',
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'フォーマットを無効化',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => '範囲検索を有効化',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'グローバル検索',
  'LBL_DROP_DOWN_LIST' => 'ドロップダウンリスト',
  'LBL_RADIO_FIELDS' => 'ラジオボタン',
  'LBL_MULTI_SELECT_LIST' => 'マルチセレクトフィールド',
  'COLUMN_TITLE_PRECISION' => '精度',
  'MSG_DELETE_CONFIRM' => '本当にこの項目を削除してよいですか？',
  'POPUP_INSERT_HEADER_TITLE' => 'カスタムフィールドの追加',
  'POPUP_EDIT_HEADER_TITLE' => 'カスタムフィールドの編集',
  'LNK_SELECT_CUSTOM_FIELD' => 'カスタムフィールドの選択',
  'LNK_REPAIR_CUSTOM_FIELD' => 'カスタムフィールドの修復',
  'LBL_MODULE' => 'モジュール',
  'COLUMN_TITLE_MASS_UPDATE' => '一括更新',
  'COLUMN_TITLE_IMPORTABLE' => 'インポート可',
  'COLUMN_TITLE_DUPLICATE_MERGE' => '重複マージ',
  'LBL_LABEL' => 'ラベル',
  'LBL_DATA_TYPE' => 'データタイプ',
  'LBL_DEFAULT_VALUE' => 'デフォルト値',
  'LBL_AUDITED' => '監査',
  'LBL_REPORTABLE' => 'レポート可',
  'ERR_RESERVED_FIELD_NAME' => '予約語',
  'ERR_SELECT_FIELD_TYPE' => 'フィールドタイプを選択',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'フィールド名は既に存在します',
  'LBL_BTN_ADD' => '追加',
  'LBL_BTN_EDIT' => '編集',
  'LBL_GENERATE_URL' => 'URLを生成',
  'LBL_DEPENDENT_CHECKBOX' => '依存',
  'LBL_DEPENDENT_TRIGGER' => 'トリガ',
  'LBL_CALCULATED' => '計算',
  'LBL_FORMULA' => '公式',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => '依存',
  'LBL_BTN_EDIT_VISIBILITY' => '表示の編集',
  'LBL_LINK_TARGET' => 'リンクの開設',
  'LBL_IMAGE_WIDTH' => '幅',
  'LBL_IMAGE_HEIGHT' => '高さ',
  'LBL_IMAGE_BORDER' => '境界',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'U.S.フォーマット',
  'LBL_DEPENDENT' => '依存',
  'LBL_VISIBLE_IF' => '明示',
  'LBL_ENFORCED' => '強制',
  'LBL_HELP' => 'ヘルプ',
  'LBL_HAS_PARENT' => '親がある',
  'LBL_PARENT_DROPDOWN' => '親ドロップダウン',
  'LBL_EDIT_VIS' => '表示の編集',
);
