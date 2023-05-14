<?php

namespace App\Controller;

use App\Model\Task;
use App\Model\User;

class TaskController
{
    private Task $taskModel;
    private UserController $userController;

    public function __construct(Task $task, UserController $userController)
    {
        $this->taskModel = $task;
        $this->userController = $userController;
    }

    public function handleRequest()
    {
        $action = $_GET['action'] ?? '';

        if (in_array($action, ['create', 'update', 'delete']) && !$this->userController->isLoggedIn()) {
            header("Location: login.php");
            exit;
        }

        switch ($action) {
            case 'create':
                // ...
            case 'update':
                // ...
            case 'delete':
                // ...
            default:
                $this->listTasks();
        }
    }

    public function listTasks()
    {
        $tasks = $this->taskModel->getAll();
        require_once __DIR__ . '../../view/task/list_task.php';

    }

    public function createTask()
    {
        $task = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'deadline' => $_POST['deadline'],
        ];
        
        $result = $this->taskModel->create($task);

        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao criar task";
        }
    }
}
