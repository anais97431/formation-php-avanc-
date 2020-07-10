<?php

namespace tests;

use app\TravelCalculator;
use app\UnitConverter;
use PHPUnit\Framework\TestCase;

class TravelCalculatorTest extends TestCase
{

    private $calculator;

    public function setUp(): void
    {
        $stub = $this->createMock(UnitConverter::class);
        $stub->method('km2miles')
            ->willReturn(15.0);

        $this->calculator = new TravelCalculator($stub);
    }
    public function testCompute()
    {
        $result = $this->calculator->compute();
        $this->assertEquals(30, $result);
    }
}