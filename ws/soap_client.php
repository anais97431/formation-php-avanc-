<?php

$client = new SoapClient(null, [
    'location' => 'http://localhost:8080/soap_server.php',
    'uri'=>'soap',
    ]);

    $response = $client->__soapCall('km2miles', ['km' => 42.5]);


var_dump($response);

$client = new SoapClient('http://geoservices.wallonie.be/geolocalisation/soap/?wsdl');

$response = $client->searchCommunes([
    'search' => 'gant',
]);


$response = $client->searchPosition([
    'search' => 'grand place bruxelle',
]);
print_r($response);


