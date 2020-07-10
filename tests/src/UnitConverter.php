<?php

namespace app;


class UnitConverter
{
    public function km2miles(float $km): float
    {
        return $km /1.609;
    }
}