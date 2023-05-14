<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';
require_once '../config/database.php';

use App\Controller\TaskController;
use App\Controller\UserController;
use App\Model\Task;
use App\Model\User;
use App\Database;
use App\Config;

$config = new Config();
$database = new Database($config);
$taskModel = new Task($database);
$userController = new UserController();
$taskController = new TaskController($taskModel, $userController);

$taskController->handleRequest();

