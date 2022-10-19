<?php
namespace AreaCalc;

class ShapeCalculator
{
    public function area(ShapeInterface $shape): float
    {
        return $shape->calcArea();
    }

    public function perimeter(ShapeInterface $shape): float
    {
        return $shape->calcPerimeter();
    }
}