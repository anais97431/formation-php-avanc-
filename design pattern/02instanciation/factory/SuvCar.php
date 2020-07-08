<?php

class SuvCar implements CarInterface{

    public function driveTo($x, $y): void{
        echo 'SUV drive to'."\n";
    }
}