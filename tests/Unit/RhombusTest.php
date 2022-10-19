<?php

namespace AreaCalc\tests\Unit;

use PHPUnit\Framework\TestCase;
use AreaCalc\ShapeCalculator;
use AreaCalc\Rhombus;

class RhombusTest extends TestCase
{
    public function testRhombusArea()
    {
        $rhombus = new Rhombus(3, 4);
        $calculator = new ShapeCalculator;
        $this->assertEquals(6, $calculator->area($rhombus));
    }

    public function testRhombusPerimeter()
    {
        $rhombus = new Rhombus(2, 3);
        $calculator = new ShapeCalculator;
        $this->assertEquals(10, $calculator->perimeter($rhombus));
    }
}