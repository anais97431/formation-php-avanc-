<?php

include __DIR__.'/CarInterface.php';
include __DIR__.'/SuvCar.php';

class CarFactory{
    public function createCar(): CarInterface{
        return new SuvCar();
    }
}