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
    'LBL_MODULE_NAME' => 'การเก็บถาวรอีเมล',
    'LBL_SNIP_SUMMARY' => "การเก็บถาวรอีเมลเป็นบริการนำเข้าอัตโนมัติที่ช่วยให้ผู้ใช้สามารถนำเข้าอีเมลเข้าสู่ Sugar ด้วยการส่งจากอีเมลไคลเอนต์หรือบริการไปยังที่อยู่อีเมลที่ Sugar กำหนดให้ แต่ละอินสแตนซ์ของ Sugar จะมีที่อยู่อีเมลที่ไม่ซ้ำกัน ในการนำเข้าอีเมล ผู้ใช้จะส่งอีเมลไปยังที่อยู่ที่ให้โดยใช้ฟิลด์ ถึง สำเนา สำเนาลับ บริการการเก็บถาวรอีเมลจะนำเข้าอีเมลเข้าสู่อินสแตนซ์ของ Sugar บริการนี้จะนำเข้าอีเมล ตลอดจนไฟล์แนบ รูปภาพ และกิจกรรมในปฏิทิน และสร้างระเบียนภายในแอปพลิเคชันที่เชื่อมโยงกับระเบียนที่มีอยู่ โดยอ้างอิงจากที่อยู่อีเมลที่ตรงกัน
    <br><br>ตัวอย่าง: ในฐานะผู้ใช้ ฉันจะสามารถดูอีเมลทั้งหมดที่เชื่อมโยงกับบัญชีโดยอ้างอิงที่อยู่อีเมลในระเบียนของบัญชี และยังสามารถดูอีเมลที่เชื่อมโยงกับสัญญาที่เกี่ยวข้องกับบัญชีอีกด้วย
    <br><br>ยอมรับเงื่อนไขด้านล่างและคลิกเปิดใช้งานเพื่อเริ่มใช้บริการ คุณจะสามารถปิดใช้งานบริการได้ตามต้องการ เมื่อเปิดใช้บริการแล้ว ที่อยู่อีเมลที่จะใช้สำหรับบริการจะปรากฏ
    <br><br>",
	'LBL_REGISTER_SNIP_FAIL' => 'ไม่สามารถติดต่อบริการเก็บถาวรอีเมล: %s!<br>',
	'LBL_CONFIGURE_SNIP' => 'การเก็บถาวรอีเมล',
    'LBL_DISABLE_SNIP' => 'ปิดใช้งาน',
    'LBL_SNIP_APPLICATION_UNIQUE_KEY' => 'คีย์ที่ไม่ซ้ำกันของแอปพลิเคชัน',
    'LBL_SNIP_USER' => 'ผู้ใช้ของการเก็บถาวรอีเมล',
    'LBL_SNIP_PWD' => 'รหัสผ่านของการเก็บถาวรอีเมล',
    'LBL_SNIP_SUGAR_URL' => 'URL อินสแตนซ์ของ Sugar นี้',
	'LBL_SNIP_CALLBACK_URL' => 'URL ของบริการเก็บถาวรอีเมล',
    'LBL_SNIP_USER_DESC' => 'ผู้ใช้ของการเก็บถาวรอีเมล',
    'LBL_SNIP_KEY_DESC' => 'คีย์ OAuth ของการเก็บถาวรอีเมล ใช้สำหรับเข้าถึงอินสแตนซ์นี้สำหรับการนำเข้าอีเมล',
    'LBL_SNIP_STATUS_OK' => 'เปิดใช้งาน',
    'LBL_SNIP_STATUS_OK_SUMMARY' => 'อินสแตนซ์ Sugar นี้เชื่อมต่อกับเซิร์ฟเวอร์การเก็บถาวรอีเมลสำเร็จแล้ว',
    'LBL_SNIP_STATUS_ERROR' => 'ข้อผิดพลาด',
    'LBL_SNIP_STATUS_ERROR_SUMMARY' => 'อินสแตนซ์นี้มีใบอนุญาตเซิร์ฟเวอร์การเก็บถาวรอีเมลที่ถูกต้อง แต่เซิร์ฟเวอร์แสดงข้อความแจ้งข้อผิดพลาดต่อไปนี้:',
    'LBL_SNIP_STATUS_FAIL' => 'ไม่สามารถลงทะเบียนกับเซิร์ฟเวอร์การเก็บถาวรอีเมล',
    'LBL_SNIP_STATUS_FAIL_SUMMARY' => 'บริการเก็บถาวรอีเมลไม่สามารถใช้ได้ในขณะนี้ เซิร์ฟเวอร์อาจหยุดทำงานหรือการเชื่อมต่อกับอินสแตนซ์ Sugar นี้อาจล้มเหลว',
    'LBL_SNIP_GENERIC_ERROR' => 'บริการเก็บถาวรอีเมลไม่สามารถใช้ได้ในขณะนี้ เซิร์ฟเวอร์อาจหยุดทำงานหรือการเชื่อมต่อกับอินสแตนซ์ Sugar นี้อาจล้มเหลว',

	'LBL_SNIP_STATUS_RESET' => 'ยังไม่ได้เรียกใช้',
	'LBL_SNIP_STATUS_PROBLEM' => 'ปัญหา: %s',
    'LBL_SNIP_NEVER' => "ไม่มี",
    'LBL_SNIP_STATUS_SUMMARY' => "สถานะของบริการเก็บถาวรอีเมล:",
    'LBL_SNIP_ACCOUNT' => "บัญชี",
    'LBL_SNIP_STATUS' => "สถานะ",
    'LBL_SNIP_LAST_SUCCESS' => "เรียกใช้สำเร็จครั้งล่าสุด",
    "LBL_SNIP_DESCRIPTION" => "บริการเก็บถาวรอีเมลเป็นระบบการเก็บถาวรอีเมลอัตโนมัติ",
    "LBL_SNIP_DESCRIPTION_SUMMARY" => "บริการนี้ทำให้คุณสามารถดูอีเมลที่ส่งถึงหรือส่งจากที่อยู่ติดต่อของคุณภายใน SugarCRM โดยที่คุณไม่ต้องนำเข้าและเชื่อมโยงอีเมลด้วยตนเอง",
    "LBL_SNIP_PURCHASE_SUMMARY" => "ในการใช้การเก็บถาวรอีเมล คุณต้องซื้อใบอนุญาตสำหรับอินสแตนซ์ SugarCRM ของคุณ",
    "LBL_SNIP_PURCHASE" => "คลิกที่นี่เพื่อซื้อ",
    'LBL_SNIP_EMAIL' => 'ที่อยู่ของการเก็บถาวรอีเมล',
    'LBL_SNIP_AGREE' => "ฉันยอมรับเงื่อนไขข้างต้นและ <a href='http://www.sugarcrm.com/crm/TRUSTe/privacy.html' target='_blank'>ข้อตกลงเกี่ยวกับความเป็นส่วนตัว</a>",
    'LBL_SNIP_PRIVACY' => 'ข้อตกลงเกี่ยวกับความเป็นส่วนตัว',

    'LBL_SNIP_STATUS_PINGBACK_FAIL' => 'ปิงกลับไม่สำเร็จ',
    'LBL_SNIP_STATUS_PINGBACK_FAIL_SUMMARY' => 'เซิร์ฟเวอร์การเก็บถาวรอีเมลไม่สามารถเชื่อมต่อกับอินสแตนซ์ Sugar ของคุณ โปรดลองอีกครั้งหรือ <a href="http://www.sugarcrm.com/crm/case-tracker/submit.html?lsd=supportportal&tmpl=" target="_blank">ติดต่อฝ่ายสนับสนุนลูกค้า</a>',

    'LBL_SNIP_BUTTON_ENABLE' => 'เปิดใช้งานการเก็บถาวรอีเมล',
    'LBL_SNIP_BUTTON_DISABLE' => 'ปิดใช้งานการเก็บถาวรอีเมล',
    'LBL_SNIP_BUTTON_RETRY' => 'ลองเชื่อมต่ออีกครั้ง',
    'LBL_SNIP_ERROR_DISABLING' => 'เกิดข้อผิดพลาดขณะพยายามติดต่อเซิร์ฟเวอร์การเก็บถาวรอีเมล และไม่สามารถปิดใช้งานบริการนี้',
    'LBL_SNIP_ERROR_ENABLING' => 'เกิดข้อผิดพลาดขณะพยายามติดต่อเซิร์ฟเวอร์การเก็บถาวรอีเมล และไม่สามารถเปิดใช้งานบริการนี้',
    'LBL_CONTACT_SUPPORT' => 'โปรดลองอีกครั้งหรือติดต่อฝ่ายสนับสนุนของ SugarCRM',
    'LBL_SNIP_SUPPORT' => 'โปรดติดต่อฝ่ายสนับสนุนของ SugarCRM เพื่อขอความช่วยเหลือ',
    'ERROR_BAD_RESULT' => 'ได้รับผลลัพธ์ไม่ถูกต้องจากบริการ',
	'ERROR_NO_CURL' => 'ต้องมีส่วนขยาย cURL แต่ยังไม่ได้เปิดใช้งาน',
	'ERROR_REQUEST_FAILED' => 'ไม่สามารถติดต่อเซิร์ฟเวอร์',

    'LBL_CANCEL_BUTTON_TITLE' => 'ยกเลิก',

    'LBL_SNIP_MOUSEOVER_STATUS' => 'นี่คือสถานะของบริการการเก็บถาวรอีเมลในอินสแตนซ์ของคุณ สถานะนี้จะแสดงว่าการเชื่อมต่อระหว่างเซิร์ฟเวอร์การเก็บถาวรอีเมลและอินสแตนซ์ Sugar ของคุณมีการเชื่อมต่อสำเร็จหรือไม่',
    'LBL_SNIP_MOUSEOVER_EMAIL' => 'นี่คือที่อยู่อีเมลสำหรับการเก็บถาวรอีเมลที่จะส่งเพื่อนำเข้าอีเมลเข้าสู่ Sugar',
    'LBL_SNIP_MOUSEOVER_SERVICE_URL' => 'นี่คือ URL ของเซิร์ฟเวอร์การเก็บถาวรอีเมล คำขอทั้งหมด เช่น การเปิดใช้งานและการปิดใช้งานบริการเก็บถาวรอีเมลจะถูกส่งต่อผ่านทาง URL นี้',
    'LBL_SNIP_MOUSEOVER_INSTANCE_URL' => 'นี่คือ URL เว็บเซอร์วิสของอินสแตนซ์ Sugar ของคุณ เซิร์ฟเวอร์การเก็บถาวรอีเมลจะเชื่อมต่อกับเซิร์ฟเวอร์ของคุณผ่าน URL นี้',
);
