<?php

namespace App\Model;

use App\Database;
use PDO;

class Task
{
    private PDO $db;

    public function __construct(Database $database)
    {
        $this->db = $database->connect();
    }

    public function getAll(): array
    {
        $stmt = $this->db->prepare('SELECT * FROM tasks');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $task): bool
    {
        $stmt = $this->db->prepare('INSERT INTO tasks (title, description, deadline) VALUES (:title, :description, :deadline)');
        $stmt->bindValue(':title', $task['title']);
        $stmt->bindValue(':description', $task['description']);
        $stmt->bindValue(':deadline', $task['deadline']->format('Y-m-d'));
        return $stmt->execute();
    }
}
