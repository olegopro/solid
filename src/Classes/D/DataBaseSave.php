<?php


namespace App\D;


use App\Saver;
use mysqli;

class DataBaseSave implements Saver
{

    private $mysqli, $host, $user, $pass, $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db   = $db;
    }

    public function connect()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }

    public function save($data)
    {
        $this->connect();
        $this->mysqli->query("INSERT INTO `report` (report) VALUES ('" . $data . " ')");
    }


}
