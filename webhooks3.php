<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');


$access_token = 'Pp+X6o0DyjM2PpSwiAKEjG/a0OyuCvAJt8iJsnCfTfOoAekSTLZqE0iKaOj6rorVcvXhMocDivS8k57i6Zz9vTP+FlFwGoIdHvbpvZeHXP9XWmCECyEUKak0G+8HNRAIUfOObeeM1NsDnLVbwCPYVQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');

$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$access_token}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];
//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['userId'];
#ตัวอย่าง Message Type "Text + Sticker"
if($message == "สวัสดี"){
   $arrayPostData['to'] = $id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
   $arrayPostData['messages'][1]['type'] = "sticker";
   $arrayPostData['messages'][1]['packageId'] = "2";
   $arrayPostData['messages'][1]['stickerId'] = "34";
   pushMsg($arrayHeader,$arrayPostData);
}
 

#ตัวอย่าง Message Type "Text + Sticker ใน 1 ครั้ง"
else if($message == "ลาก่อน"){
	 $arrayPostData['to'] = $id;
	$arrayPostData['messages'][0]['type'] = "text";
	$arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
	$arrayPostData['messages'][1]['type'] = "sticker";
	$arrayPostData['messages'][1]['packageId'] = "1";
	$arrayPostData['messages'][1]['stickerId'] = "131";
	pushMsg($arrayHeader,$arrayPostData);
}
function pushMsg($arrayHeader,$arrayPostData){
   $strUrl = "https://api.line.me/v2/bot/message/push";

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$strUrl);
   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $result = curl_exec($ch);
   curl_close ($ch);
}
exit;
?>
