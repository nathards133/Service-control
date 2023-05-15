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
$updateData = [
    'id' => 1, // Altere o valor para o ID da tarefa que você deseja atualizar
    'title' => 'teste update',
    'description' => 'testando envio de task',
    'deadline' => new DateTime('2021-10-10'),
    'user_id' => 1
];

try {
    $taskModel->update($updateData);
    echo "Tarefa atualizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao atualizar tarefa: " . $e->getMessage();
}