<?php

$curl = curl_init('http://localhost:8080/desk');
// permet de récupérer la donnée
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
var_dump(json_decode($response));

echo"\n";

$curl = curl_init('http://localhost:8080/desk');
// permet de récupérer la donnée
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
$response = curl_exec($curl);
var_dump(json_decode($response));

echo"\n";