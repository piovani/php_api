<?php

namespace App\config;

use mysqli;

class Db
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;

    public $conn;

    public function __construct()
    {
        $this->host = 'php-api-database';
        $this->user = 'user';
        $this->password = 'secret';
        $this->database = 'database';
        $this->port = '3306';

        $this->conn = new mysqli('php-api-database', 'user', 'secret', 'database', '3306');

        if ($this->conn->connect_error) {
            die("ERROR PDO: " . $this->conn->connect_error);
        }
    }
}
