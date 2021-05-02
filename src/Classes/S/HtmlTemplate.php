<?php

namespace App\S;

class HtmlTemplate implements Template
{
    function render($data)
    {
        echo '<h1>' . $data . '</h1>';
    }
}
