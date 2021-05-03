<?php


namespace App\D;


use App\Saver;

class FileSave implements Saver
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function save($data)
    {
        file_put_contents($this->filename, $data);
    }
}
