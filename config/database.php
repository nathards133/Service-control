<?php
namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $connection;

    public function __construct(private Config $config) {}

    public function connect(): PDO
    {
        if (!isset($this->connection)) {
            $dbConfig = $this->config->get('db');

            try {
                $dsn = "mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['name'];
                $this->connection = new PDO($dsn, $dbConfig['user'], $dbConfig['password']);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Tratar exceções de acordo com o modo de depuração
                if ($this->config->get('app')['debug']) {
                    die("Erro de conexão: " . $e->getMessage());
                } else {
                    die("Erro de conexão.");
                }
            }
        }

        return $this->connection;
    }
}