<?php
$access_token = 'sf2/JMj8FDC4zbIbFtcAtRaQqNqV74Bzana2/88SRv2rZuwZyyQaBdy1RsJ8xUMB+J38BP9WW36F9REKpFa5Uhob59s90gU5kbX/is/hZdotjxuGtmRN8GE6J0z6XJYTmwZW53v4erTQfYg/oD8bGQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
