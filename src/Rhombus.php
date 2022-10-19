<?php

namespace AreaCalc;

class Rhombus implements ShapeInterface
{
    public function __construct(private float $diagonalA, private float $diagonalB)
    {
    }

    public function calcPerimeter(): float
    {
        // TODO: Implement calcPerimeter() method.
        return 2 * sqrt(pow($this->diagonalA, 2) + pow($this->diagonalB, 2));
    }

    public function calcArea(): float
    {
        // TODO: Implement calcArea() method.
        return ($this->diagonalA * $this->diagonalB ) / 2;
    }
}