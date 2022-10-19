<?php

namespace AreaCalc\tests\Unit;

use PHPUnit\Framework\TestCase;
use AreaCalc\ShapeCalculator;
use AreaCalc\Circle;

class CircleTest extends TestCase
{
    public function testCircleArea()
    {
        $circle = new Circle(2);
        $calculator = new ShapeCalculator;
        $this->assertEquals(6.28, $calculator->area($circle));
    }

    public function testCirclePerimeter()
    {
        $circle = new Circle(2);
        $calculator = new ShapeCalculator;
        $this->assertEquals(12.56, $calculator->perimeter($circle));
    }
}