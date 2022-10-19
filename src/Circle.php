<?php

namespace AreaCalc;

class Circle implements ShapeInterface
{
    public function __construct(private float $radius)
    {

    }
    public function calcArea(): float
    {
        // TODO: Implement calcArea() method.
        return pi() * pow($this->radius, 2);
    }

    public function calcPerimeter(): float
    {
        // TODO: Implement calcPerimeter() method.
        return 2 * pi() * $this->radius;
    }
}