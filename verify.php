<?php
$access_token = 'NdNQ0pgqjUFIcZEvg+zpyH3vbmcBbautMwgXADVRbsT+tT1b48v90UVx5kdIJ6R5K0LXJSW2w/jJrSpe8prWkQOHRuzqPYbcfSaT4hp6ljPExg5gOs8PoNONn+73kkHEUXoDHHMEHz12cqQ0xPvDPgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
