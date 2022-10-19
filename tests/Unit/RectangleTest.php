<?php

namespace AreaCalc\tests\Unit;

use PHPUnit\Framework\TestCase;
use AreaCalc\ShapeCalculator;
use AreaCalc\Rectangle;

class RectangleTest extends TestCase
{
    public function testRectangleArea()
    {
        $rectangle = new Rectangle(2, 3);
        $calculator = new ShapeCalculator;
        $this->assertEquals(6.28, $calculator->area($rectangle));
    }

    public function testRectanglePerimeter()
    {
        $rectangle = new Rectangle(2, 3);
        $calculator = new ShapeCalculator;
        $this->assertEquals(10, $calculator->perimeter($rectangle));
    }
}