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
$users = $userModel->getAll();
echo json_encode($users);
