<?php
$access_token = 'Pp+X6o0DyjM2PpSwiAKEjG/a0OyuCvAJt8iJsnCfTfOoAekSTLZqE0iKaOj6rorVcvXhMocDivS8k57i6Zz9vTP+FlFwGoIdHvbpvZeHXP9XWmCECyEUKak0G+8HNRAIUfOObeeM1NsDnLVbwCPYVQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
