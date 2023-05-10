<?php
require_once 'app/config.php';
require_once 'app/model/User.php';
use App\Model\User;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);

$userModel = new User($database);
$updateData = [
    'id' => 1, // Altere o valor para o ID do usuário que você deseja atualizar
    'username' => 'updated_username',
    'email' => 'updated_email@example.com',
    'password' => 'updated_password',
];
$result = $userModel->update($updateData);
var_dump($result);
