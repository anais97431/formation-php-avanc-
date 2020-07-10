<?php

namespace app;

class TravelCalculator
{
    private $converter;

    public function __construct(UnitConverter $converter)
    {
        $this->converter = $converter;
    }

    public function compute()
    {
        $segments = [12, 18];

        return array_reduce($segments, function($total, $segment){
            return $total + $this->converter->km2miles($segment);
        },0);
    }
}