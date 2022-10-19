<?php

namespace AreaCalc;

class Rectangle implements ShapeInterface
{
    public function __construct(private float $sideA, private float $sideB)
    {
    }

    public function calcPerimeter(): float
    {
        // TODO: Implement calcPerimeter() method.
        return 2 * ($this->sideA + $this->sideB);
    }

    public function calcArea(): float
    {
        // TODO: Implement calcArea() method.
        return $this->sideA * $this->sideB;
    }
}