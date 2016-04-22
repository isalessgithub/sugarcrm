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
  'company_url' => 'URL',
  'oauth_consumer_key' => 'Consumer Key',
  'oauth_consumer_secret' => 'Consumer Secret',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Twitter&#169でSugarインスタンスを新規アプリケーションとして登録し、Consumer KeyとConsumer Secretを取得してください。<br/><br>Steps to register your instance:<br/><br/><ol><li>Twitter&#169;ディベロッパーサイト（<a href="http://dev.twitter.com/apps/new" target="_blank">http://dev.twitter.com/apps/new</a>）を訪問します。</li><li>アプリケーションを登録するツイッターアカウントでサインインします。</li><li>登録フォームにアプリケーション名を入力します。これは、Sugar内部からツイッターを認証する際にユーザが識別する名前になります。</li><li>備考を入力します。</li><li>アプリケーションのURLを入力します。</li><li>アプリケーションタイプとしてブラウザを選択します。</li><li>コールバックURLを入力します（Sugarは認証の際にここをバイパスするので、何でも構いません。例: SugarのルートURL）。</li><li>セキュリティワードを入力します。</li><li>アプリケーションの登録をクリックします。</li><li>ツイッターAPIの利用規約に同意します。</li><li>アプリケーションページでConsumer KeyとConsumer Secretを確認し、以下に入力します。</li></ol></td></tr></table>',
  'LBL_NAME' => 'ツイッターユーザ名',
  'LBL_ID' => 'ツイッターユーザ名',
);

