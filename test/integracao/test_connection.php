<?php

require_once 'config/config.php';
require_once 'config/database.php';

use App\config;
use App\database;

$config = new Config();
$database = new Database($config);

try {
    $connection = $database->connect();
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
