<?php


require_once 'config/config.php';
require_once 'config/database.php';
require_once 'app/model/Task.php';
use App\Model\Task;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);

$taskModel = new Task($database);
$deleteData = [
    'id' => 1, // Altere o valor para o ID da tarefa que você deseja deletar
];

try {
    $taskModel->delete($deleteData);
    echo "Tarefa deletada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao deletar tarefa: " . $e->getMessage();
}