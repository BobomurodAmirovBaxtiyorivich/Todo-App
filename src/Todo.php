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

    public function get(): array
    {
        $this->query = "SELECT * FROM todos ORDER BY id DESC";
        $this->stmt = $this->conn->query($this->query);

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Start($id): bool
    {
        $this->query = "UPDATE todos
                        SET status = 'in_progress', updated_at = NOW()
                        WHERE id = :id";
        return $this->conn->prepare($this->query)->execute([
            ":id" => $id
        ]);
    }

    public function Complete($id): bool
    {
        $this->query = "UPDATE todos
                        SET status = 'completed', updated_at = NOW()
                        WHERE id = :id";
        return $this->conn->prepare($this->query)->execute([
            ":id" => $id
        ]);
    }

    public function Pending($id): bool
    {
        $this->query = "UPDATE todos
                        SET status = 'pending', updated_at = NOW()
                        WHERE id = :id";
        return $this->conn->prepare($this->query)->execute([
            ":id" => $id
        ]);
    }

    public function Edit($id, $new_title): bool
    {
        $this->query = "UPDATE todos
                        SET title = $new_title, updated_at = NOW()
                        WHERE id = :id";
        return $this->conn->prepare($this->query)->execute([
            ":id" => $id
        ]);
    }

    public function Delete($id): bool
    {
        $this->query = "DELETE FROM todos
                        WHERE id = :id";
        return $this->conn->prepare($this->query)->execute([
            ":id" => $id
        ]);
    }
}