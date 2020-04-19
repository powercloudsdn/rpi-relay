<?php

$url = "https://api.sunrise-sunset.org/json?lat=-26.289580&lng=28.194010&date=today&formatted=0";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$json = json_decode(curl_exec($ch)) ?? die;

$sun_set = $json->results->sunset ?? die;

$sun_set = strtotime($json->results->sunset) + 7200;

$sun_set_time = shell_exec("echo $sun_set > /var/www/html/sunset.txt");