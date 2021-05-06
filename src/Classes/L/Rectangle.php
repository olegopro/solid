<?php

namespace App\L;

class Rectangle
{
    protected $width;
    protected $height;

    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }


}
