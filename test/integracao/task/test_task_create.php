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

$task = [
    'title' => 'teste',
    'description' => 'testando envio de task',
    'deadline' => new DateTime('2021-10-10'),
    'user_id' => '1'

];

$result = $taskModel->create($task);
var_dump($result);