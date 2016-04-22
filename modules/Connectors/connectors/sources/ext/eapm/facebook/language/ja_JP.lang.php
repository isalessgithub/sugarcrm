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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Facebook&amp;#169;（<a href=\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a>）でSugarインスタンスを新しいアプリケーションとして登録し、APIキーとAppシークレットを取得します。<br/><br>登録方法は下記の通りです。<br/><br/><ol><li>Facebook&amp;#169; to create the application: <a href=</li><li>アプリケーションを生成するアカウントでFacebook&amp;#169;にサインインしてください。</li><li>アプリケーションの生成ページでアプリケーションの名前を入力してください。これは、Sugar内部でFacebook&amp;#169;アカウントを認証する際にユーザが認識する名前です。.</li><li>Facebook&amp;#169;利用規約に同意してください。</li><li>アプリの生成をクリックしてください。</li><li>セキュリティチェックに渡すセキュリティワードを入力してください。</li><li>登録ページでWebサイトに進み、SugarインスタンスのURLを入力してください。</li><li>更新を保存してください。</li><li>左側メニューのFacebookインテグレーションのページに進み、APIキーとシークレットを確認してください。アプリケーションIDとシークレットを下記に入力してください。</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'APIキー',
  'oauth_consumer_secret' => 'アプリシークレット',
);

