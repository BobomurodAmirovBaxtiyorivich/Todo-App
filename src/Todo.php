<?php

require "DB.php";

class Todo
{
    public $conn;
    public string $query;
    public $stmt;

    public function __construct()
    {
        $pdo = new DB();

        $this->conn = $pdo->conn;
    }

    public function store($title, $due_date): void
    {
        $this->query = "INSERT INTO todos (title, status, due_date, created_at, updated_at) VALUES (:title, :status, :due_date, NOW(), NOW())";

        $this->conn->prepare($this->query)->execute([
            ":title" => $title,
            ":status" => "pending",
            ":due_date" => $due_date
        ]);
    }

    public function get()
    {
        $this->query = "SELECT * FROM todos ORDER BY id DESC";
        $this->stmt = $this->conn->query($this->query);

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}