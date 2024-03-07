<?php

namespace App\Homework1;

class Rectangle implements IFigure
{
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height)
    {
        if($this->validate($width, $height)) {
            $this->width = $width;
            $this->height = $height;
        }
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }

    protected function validate(float $width, float $height): bool
    {
        if($width > 0 && $height > 0) {
            return true;
        }else{
            throw new \Exception("Width and height must be > 0");
        }
    }
}