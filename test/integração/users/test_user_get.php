<?php
require_once 'app/config.php';
require_once 'app/model/User.php';
use App\Model\User;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);

$userModel = new User($database);
$user = $userModel->getById(1); // Altere o valor para o ID do usuário que você deseja recuperar
var_dump($user);
