<?php

namespace AreaCalc;

interface ShapeInterface {
    public function calcArea(): float;
    public function calcPerimeter(): float;
}
