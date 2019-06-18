<?php



require "vendor/autoload.php";

$access_token = 'Pp+X6o0DyjM2PpSwiAKEjG/a0OyuCvAJt8iJsnCfTfOoAekSTLZqE0iKaOj6rorVcvXhMocDivS8k57i6Zz9vTP+FlFwGoIdHvbpvZeHXP9XWmCECyEUKak0G+8HNRAIUfOObeeM1NsDnLVbwCPYVQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'aad0da32c06f36b35db2502311154e55';

$pushID = 'U749cd4947a3938f3f5b14c75d6f8b27e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







