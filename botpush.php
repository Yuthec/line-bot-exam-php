<?php



require "vendor/autoload.php";

$access_token = 'Pp+X6o0DyjM2PpSwiAKEjG/a0OyuCvAJt8iJsnCfTfOoAekSTLZqE0iKaOj6rorVcvXhMocDivS8k57i6Zz9vTP+FlFwGoIdHvbpvZeHXP9XWmCECyEUKak0G+8HNRAIUfOObeeM1NsDnLVbwCPYVQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'aad0da32c06f36b35db2502311154e55';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







