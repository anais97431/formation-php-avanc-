<?php

namespace tests;

use app\UnitConverter;
use PHPUnit\Framework\TestCase;

class UnitConverterTest extends TestCase
{

    public function setUp(): void
    {
        $this->converter = new UnitConverter();
    }

    public function testKm2Miles()
    {
        
        $miles = $this->converter->km2miles(16.09);
        $this->assertEquals(10, $miles);
        
        $miles = $this->converter->km2miles(8);
        $this->assertLessThan(.000001, abs($miles - 4.972032318), '8km should be about 4.972032318 miles');
    }

    /**
     * @dataProvider provideKm2Miles
     */
    public function testKm2Miles2($input, $expected)
    {
        $converter = new UnitConverter();
        $miles = $converter->km2miles($input);
        $this->assertEquals($expected, $miles);
    }

    public function provideKm2Miles()
    {
        return [
            [16.09, 10],
            [1.609, 1]
        ];
    }
}