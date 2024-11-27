<?php

class DB
{
    public string $host = 'localhost';
    public string $dbname = 'Todo_App';
    public string $user = 'root';
    public string $password = 'My$par0l';
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
    }
}