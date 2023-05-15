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
$user = [
    'username' => 'Tito Rosário',
    'email' => 'tito@example.com',
    'password' => '123456',
];

$result = $userModel->create($user);
if ($result) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário!";
}
