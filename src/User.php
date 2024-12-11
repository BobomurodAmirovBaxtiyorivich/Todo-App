<?php

namespace App;

use PDO;

class User
{
    public \PDO $conn;
    public string $query;
    public $stmt;

    public function __construct()
    {
        $pdo = new DB();

        $this->conn = $pdo->conn;
    }

    public function register($full_name, $email, $password): bool
    {
        $this->query = "INSERT INTO users (full_name, email, password) VALUES (:full_name, :email, :password)";
        return $this->stmt = $this->conn->prepare($this->query)->execute([
            ":full_name" => $full_name,
            ":email" => $email,
            ":password" => $password
        ]);
    }

    public function login($email, $password){
        $this->query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute([
            ":email" => $email,
            ":password" => $password
        ]);
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}