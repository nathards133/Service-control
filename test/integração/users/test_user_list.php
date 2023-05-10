<?php
require_once 'app/config.php';
require_once 'app/model/User.php';
use App\Model\User;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);

$userModel = new User($database);
$users = $userModel->getAll();
var_dump($users);
