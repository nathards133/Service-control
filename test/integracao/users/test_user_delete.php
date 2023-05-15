<?php
require_once 'config/config.php';
require_once 'app/model/User.php';
require_once 'config/database.php';
use App\Model\User;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);

$userModel = new User($database);
$result = $userModel->delete(1); // Altere o valor para o ID do usuário que você deseja excluir
if ($result) {
    echo "Usuário excluído com sucesso!";
} else {
    echo "Erro ao excluir usuário!";
}
