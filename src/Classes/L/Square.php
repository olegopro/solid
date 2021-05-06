<?php

namespace App\L;

use App\L\Rectangle;

class Square extends Rectangle
{
    public function setHeight($height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth($width): void
    {
        $this->height = $width;
        $this->width = $width;
    }

}
