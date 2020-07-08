<?php


include __DIR__.'/CarFactory.php';

$factory = new CarFactory();

$myCar = $factory->createCar();

$mycar->driveTo(4, 5);