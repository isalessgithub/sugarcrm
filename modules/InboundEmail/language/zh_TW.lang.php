<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> '指派至小組',

	'LBL_RE'					=> '回覆：',

	'ERR_BAD_LOGIN_PASSWORD'=> '登入名或密碼不正確',
	'ERR_BODY_TOO_LONG'		=> '\r正文文字過長，無法擷取完整電子郵件。已修剪。',
	'ERR_INI_ZLIB'			=> '暫時無法關閉 Zlib 壓縮。「測試設定」可能失敗。',
	'ERR_MAILBOX_FAIL'		=> '無法抓取任何郵件帳戶。',
	'ERR_NO_IMAP'			=> '未發現 IMAP 庫。請在繼續使用輸入電子郵件之前解決此問題。',
	'ERR_NO_OPTS_SAVED'		=> '「輸入電子郵件」帳戶未儲存最高限度。請檢閱設定。',
	'ERR_TEST_MAILBOX'		=> '請檢查您的設定並再試一次。',
    'ERR_DELETE_FOLDER' => '無法刪除資料夾。',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => '刪除前無法從資料夾取消訂閱。',

	'LBL_APPLY_OPTIMUMS'	=> '套用最佳效果',
	'LBL_ASSIGN_TO_USER'	=> '指派至使用者',
	'LBL_AUTOREPLY_OPTIONS'	=> '自動回覆選項',
	'LBL_AUTOREPLY'			=> '自動回覆範本',
	'LBL_AUTOREPLY_HELP'	=> '選取自動回覆，以通知電子郵件發送者對方已收到他們的回覆。',
	'LBL_BASIC'				=> '郵件帳戶資訊',
	'LBL_CASE_MACRO'		=> '實例巨集',
	'LBL_CASE_MACRO_DESC'	=> '設定即將被解析和用於連結匯入電子郵件和實例的巨集。',
	'LBL_CASE_MACRO_DESC2'	=> '設定其為任意值，但保留 <b>"%1"</b>。',
	'LBL_CERT_DESC'			=> '強制對郵件伺服器安全性憑證進行驗證－如果是自我簽署，則不要使用。',
	'LBL_CERT'				=> '驗證憑證',
	'LBL_CLOSE_POPUP'		=> '關閉視窗',
	'LBL_CREATE_NEW_GROUP'	=> '--儲存時建立群組--',
	'LBL_CREATE_TEMPLATE'	=> '建立',
	'LBL_SUBSCRIBE_FOLDERS'	=> '訂閱資料夾',
	'LBL_DEFAULT_FROM_ADDR'	=> '預設：',
	'LBL_DEFAULT_FROM_NAME'	=> '預設：',
	'LBL_DELETE_SEEN'		=> '匯入後刪除已讀電子郵件',
	'LBL_EDIT_TEMPLATE'		=> '編輯',
	'LBL_EMAIL_OPTIONS'		=> '電子郵件處理選項',
	'LBL_EMAIL_BOUNCE_OPTIONS' => '退回處理選項',
	'LBL_FILTER_DOMAIN_DESC'=> '指定一個不會向其發送自動回覆的網域。',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> '選取以在 Sugar 中為所有內送電子郵件自動建立電子郵件記錄。',
	'LBL_POSSIBLE_ACTION_DESC'		=> '對於「建立實例」選項，必須選取「群組資料夾」',
	'LBL_FILTER_DOMAIN'		=> '此網域沒有自動回覆',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>正在尋找最佳連接變數。',
	'LBL_FIND_OPTIMUM_TITLE'=> '尋找最佳設定',
	'LBL_FIND_SSL_WARN'		=> '<br>測試 SSL 可能需要一段時間。請耐心等待。<br>',
	'LBL_FORCE_DESC'		=> '部分 IMAP/POP3 伺服器需使用特殊交換器。核取連接時推動負向交換器（即 /notls）',
	'LBL_FORCE'				=> '強制負值',
	'LBL_FOUND_MAILBOXES'	=> '找到下列可用資料夾。<br>按一下以選擇其中一個：',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>找到最高限度設定。按一下下方按鈕，以將其應用至您的郵件帳戶。',
	'LBL_FROM_ADDR'			=> '「發件者」地址',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "由於郵件服務供應商加諸的限制，此處提供的電子郵件位址可能不會出現在已發送郵件的「發件者」位址區段。在這種情況下，將使用外寄郵件伺服器定義的電子郵件位址。",
	'LBL_FROM_NAME_ADDR'	=> '發件者名稱/電子郵件',
	'LBL_FROM_NAME'			=> '「發件者」名稱',
	'LBL_GROUP_QUEUE'		=> '指派至群組',
    'LBL_HOME'              => '首頁',
	'LBL_LIST_MAILBOX_TYPE'	=> '郵件帳戶使用',
	'LBL_LIST_NAME'			=> '名稱：',
	'LBL_LIST_GLOBAL_PERSONAL'			=> '類型',
	'LBL_LIST_SERVER_URL'	=> '郵件伺服器',
	'LBL_LIST_STATUS'		=> '狀態',
	'LBL_LOGIN'				=> '使用者名稱',
	'LBL_MAILBOX_DEFAULT'	=> '收件匣',
	'LBL_MAILBOX_SSL_DESC'	=> '連接時使用 SSL。如果失敗，則檢查設定中是否包含 PHP 安裝「--with-imap-ssl」。',
	'LBL_MAILBOX_SSL'		=> '使用 SSL',
	'LBL_MAILBOX_TYPE'		=> '可能動作',
	'LBL_DISTRIBUTION_METHOD' => '分發方法',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => '新實例自動回覆範本',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '選取一個自動回覆以通知電子郵件發件者已建立實例。電子郵件主題行包含隨附至實例巨集設定的實例編號。只有當收件者收到第一封電子郵件時才會發送回覆。',
	'LBL_MAILBOX'			=> '受監視的資料夾',
	'LBL_TRASH_FOLDER'		=> 'Trash 資料夾',
	'LBL_GET_TRASH_FOLDER'	=> '取得 Trash 資料夾',
	'LBL_SENT_FOLDER'		=> '已發送資料夾',
	'LBL_GET_SENT_FOLDER'	=> '取得已發送資料夾',
	'LBL_SELECT'				=> '選擇',
	'LBL_MARK_READ_DESC'	=> '匯入時在郵件伺服器上標記已讀訊息；不要刪除。',
	'LBL_MARK_READ_NO'		=> '匯入后標記為刪除的電子郵件',
	'LBL_MARK_READ_YES'		=> '匯入后保留在伺服器上的電子郵件',
	'LBL_MARK_READ'			=> '在伺服器上保留訊息',
	'LBL_MAX_AUTO_REPLIES'	=> '自動回覆數量',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> '設定 24 小時內傳送至唯一電子郵件地址的自動回覆的最大數量。',
	'LBL_PERSONAL_MODULE_NAME' => '個人郵件帳戶',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => '個人郵件帳戶',
	'LBL_CREATE_CASE'      => '為電子郵件建立實例',
	'LBL_CREATE_CASE_HELP'  => '選取以在 Sugar 中為所有內送電子郵件自動建立實例記錄。',
	'LBL_MODULE_NAME'		=> '輸入電子郵件',
	'LBL_MODULE_NAME_SINGULAR' => '輸入電子郵件',
	'LBL_BOUNCE_MODULE_NAME' => '退回處理郵箱',
	'LBL_MODULE_TITLE'		=> '輸入電子郵件',
	'LBL_NAME'				=> '名稱',
    'LBL_NONE'              => '無',
	'LBL_NO_OPTIMUMS'		=> '找不到最高限度設定。請檢閱您的設定然後再試一次。',
	'LBL_ONLY_SINCE_DESC'	=> '在使用 POP3 時，PHP 無法篩選新/未讀訊息。此旗標允許此請求檢查上一次郵件帳戶輪詢以來的訊息。如果您的郵件伺服器不支援 IMAP，此操作將顯著改善性能。',
	'LBL_ONLY_SINCE_NO'		=> '否。檢查郵件伺服器上的所有電子郵件。',
	'LBL_ONLY_SINCE_YES'	=> '是。',
	'LBL_ONLY_SINCE'		=> '僅匯入上次檢查以來的項目：',
	'LBL_OUTBOUND_SERVER'	=> '外寄郵件伺服器',
	'LBL_PASSWORD_CHECK'	=> '密碼檢查',
	'LBL_PASSWORD'			=> '密碼',
	'LBL_POP3_SUCCESS'		=> 'POP3 測試連接成功。',
	'LBL_POPUP_FAILURE'		=> '測試連接失敗。錯誤如下所示。',
	'LBL_POPUP_SUCCESS'		=> '測試連接成功。正在運行您的設置。',
	'LBL_POPUP_TITLE'		=> '測試設定',
	'LBL_GETTING_FOLDERS_LIST' 		=> '正在獲取資料夾清單',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> '選取訂閱資料夾',
	'LBL_SELECT_TRASH_FOLDERS' 		=> '選取 Trash 資料夾',
	'LBL_SELECT_SENT_FOLDERS' 		=> '選取已傳送資料夾',
	'LBL_DELETED_FOLDERS_LIST' 		=> '以下資料夾 %s 不存在或已從伺服器刪除。',
	'LBL_PORT'				=> '郵件伺服器連接埠',
	'LBL_QUEUE'				=> '郵件帳戶佇列',
	'LBL_REPLY_NAME_ADDR'	=> '回覆名稱/電子郵件',
	'LBL_REPLY_TO_NAME'		=> '「收件者」名稱',
	'LBL_REPLY_TO_ADDR'		=> '「收件者」地址',
	'LBL_SAME_AS_ABOVE'		=> '正在使用發件者名稱/地址',
	'LBL_SAVE_RAW'			=> '儲存原始來源',
	'LBL_SAVE_RAW_DESC_1'	=> '如果您要保留每封匯入電子郵件的原始來源，請選取「是」。',
	'LBL_SAVE_RAW_DESC_2'	=> '擁有保守或錯誤配置資料庫的大型附件可能導致錯誤。',
	'LBL_SERVER_OPTIONS'	=> '進階設定',
	'LBL_SERVER_TYPE'		=> '郵件伺服器協定',
	'LBL_SERVER_URL'		=> '郵件伺服器位址',
	'LBL_SSL_DESC'			=> '如果您的郵件伺服器支援安全通訊端連接，啟用此選項將在匯入電子郵件時強制建立 SSL 連接。',
	'LBL_ASSIGN_TO_TEAM_DESC' => '選取小組擁有此郵件帳戶的存取權限。',
	'LBL_SSL'				=> '使用 SSL',
	'LBL_STATUS'			=> '狀態',
	'LBL_SYSTEM_DEFAULT'	=> '系統預設',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> '測試',
	'LBL_TEST_SETTINGS'		=> '測試設定',
	'LBL_TEST_SUCCESSFUL'	=> '連接已成功完成。',
	'LBL_TEST_WAIT_MESSAGE'	=> '請稍等片刻...',
	'LBL_TLS_DESC'			=> '連接至郵件伺服器時使用傳輸層安全性－只有當您的郵件伺服器支援此協定才可使用。',
	'LBL_TLS'				=> '使用 TLS',
	'LBL_WARN_IMAP_TITLE'	=> '停用輸入電子郵件',
	'LBL_WARN_IMAP'			=> '警告：',
	'LBL_WARN_NO_IMAP'		=> '如未啟用 IMAP c-用戶端庫/使用 PHP 模組編譯，輸入電子郵件將<b>無法</b>正常運轉。請連絡您的管理員解決此問題。',

	'LNK_CREATE_GROUP'		=> '建立新群組',
	'LNK_LIST_CREATE_NEW_GROUP'	 => '新群組郵件帳戶',
	'LNK_LIST_CREATE_NEW_BOUNCE' => '新退回處理帳戶',
	'LNK_LIST_MAILBOXES'	=> '所有郵件帳戶',
	'LNK_LIST_QUEUES'		=> '所有佇列',
	'LNK_LIST_SCHEDULER'	=> '排程器',
	'LNK_LIST_TEST_IMPORT'	=> '測試電子郵件匯入',
	'LNK_NEW_QUEUES'		=> '建立新佇列',
	'LNK_SEED_QUEUES'		=> '小組的種子佇列',
	'LBL_GROUPFOLDER_ID'	=> '群組資料夾 ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => '指派至群組資料夾',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => '允許使用者發送電子郵件時使用發件者姓名和地址作為回覆收件者地址。',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => '選取此選項後，在為擁有群組郵件帳戶存取權限的使用者撰寫電子郵件時，與該群組郵件帳戶相關的發件者姓名和發件者電子郵件地址將作為「發件者」欄位的一個選項。',
    'LBL_STATUS_ACTIVE'     => '使用中',
    'LBL_STATUS_INACTIVE'   => '非使用中',
    'LBL_IS_PERSONAL' => '個人',
    'LBL_IS_GROUP' => '群組',
    'LBL_ENABLE_AUTO_IMPORT' => '自動匯入電子郵件',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告：您正在修改您的自動匯入設定，這可能導致資料丟失。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告：自動建立實例時必須啟用自動匯入。',
	'LBL_EDIT_LAYOUT' => '編輯配置' /*for 508 compliance fix*/,
);
?>
