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
$updateData = [
    'id' => 1,
    'username' => 'Teste de atualização',
    'email' => 'atualizandoUser@example.com',
    'password' => '123456',
];
$result = $userModel->update($updateData);
if ($result) {
    echo "Usuário atualizado com sucesso!";
} else {
    echo "Erro ao atualizar usuário!";
}
