<?php


namespace App\D;


class View
{
    public function render($doctor, $patient, $data)
    {
        return $doctor . '<br>' . $patient . '<br>' . $data;
    }
}
