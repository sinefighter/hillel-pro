<?php

namespace App\Homework1;

class Square extends Rectangle implements IFigure
{
    public function __construct(float $width)
    {
        parent::__construct($width, $width);
    }

    public function getArea(): float
    {
        return $this->width ** 2;
    }
}