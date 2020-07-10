<?php


function km2miles(float $km): float
{
    return $km /1.609;
}

$server = new SoapServer(null, ['uri'=>'soap']);

$server ->addFunction('km2miles');
$server->handle();