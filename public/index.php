<?php
// Path: public\index.php
session_start();

require_once '../vendor/autoload.php';
require_once '../config/config.php';
require_once '../config/database.php';
require_once '../app/model/Task.php';
require_once '../app/model/User.php';


use App\Controller\TaskController;
use App\Controller\UserController;
use App\Model\Task;
use App\Model\User;
use App\Database;
use App\Config;

$config = new Config();
$database = new Database($config);
$taskModel = new Task($database);
$taskController = new TaskController($taskModel);

$taskController->handleRequest();
$tasks = $taskController->listTasks();
$userModel = new User();
$userController = new UserController($userModel);
include '../app/view/task/list_task.php';


