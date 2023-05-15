<?php

require_once 'config/database.php';
require_once 'config/config.php';
require_once 'app/model/Task.php';

use App\Model\Task;
use App\Config;
use App\Database;

$config = new Config();
$database = new Database($config);


$taskModel = new Task($database);
$task = $taskModel->getAll();
echo json_encode($task);