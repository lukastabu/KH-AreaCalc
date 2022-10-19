<?php

namespace AreaCalc\tests\Unit;

use PHPUnit\Framework\TestCase;
use AreaCalc\ShapeCalculator;
use AreaCalc\Square;

class SquareTest extends TestCase
{
    public function testSquareArea()
    {
        $square = new Square(3);
        $calculator = new ShapeCalculator;
        $this->assertEquals(9, $calculator->area($square));
    }

    public function testSquarePerimeter()
    {
        $square = new Square(2);
        $calculator = new ShapeCalculator;
        $this->assertEquals(12, $calculator->perimeter($square));
    }
}