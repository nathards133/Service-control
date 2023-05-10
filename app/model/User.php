<?php

namespace App\Model;

use App\Database;
use App\Config;
use PDO;

class User
{
    private PDO $db;

    public function __construct()
    {
        $config = new Config();
        $this->db = (new Database($config))->connect();
    }

    public function getAll(): array
    {
        $stmt = $this->db->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): ?array
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result : null;
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $stmt->bindParam(':username', $data['username'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function update(array $updateData): bool
    {
        $id = $updateData['id'];
        $username = $updateData['username'];
        $email = $updateData['email'];
        $password = password_hash($updateData['password'], PASSWORD_DEFAULT);
    
        $stmt = $this->db->prepare("UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id);
    
        return $stmt->execute();
    }
    

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
