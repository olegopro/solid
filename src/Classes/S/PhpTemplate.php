<?php

namespace App\S;

class PhpTemplate implements Template
{
    function render($data)
    {
        echo '<h2>' . $data . '</h2>';
    }
}
