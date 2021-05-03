<?php

namespace App\S;

class PhpTemplate implements Template
{
    public function render($data)
    {
        echo '<h2>' . $data . '</h2>';
    }
}
