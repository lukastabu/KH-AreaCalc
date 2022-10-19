<?php

namespace AreaCalc;

class Square implements ShapeInterface
{
    public function __construct(private float $side)
    {
    }

    public function calcPerimeter(): float
    {
        // TODO: Implement calcPerimeter() method.
        return 4 * $this->side;
    }

    public function calcArea(): float
    {
        // TODO: Implement calcArea() method.
        return pow($this->side, 2);
    }
}