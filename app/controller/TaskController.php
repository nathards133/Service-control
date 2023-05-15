<?php

namespace App\Controller;

use App\Model\Task;
use App\Model\User;

class TaskController
{
    private Task $taskModel;
    private UserController $userController;

    public function __construct(Task $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function handleRequest()
    {
        $action = $_GET['action'] ?? '';

        switch ($action) {
            case 'create':
                $this->createTask();
                break;
            // ...
            default:
                $this->listTasks();
        }
    }

    public function listTasks()
    {
        $tasks = $this->taskModel->getAll();
        return $tasks;
    }

    public function createTask()
    {
        if(!$this->userController->isLoggedIn()){
            header("Location: login.php");
            exit;
        }

        if($_SERVER["REQUEST_METHOD"] === "POST"){
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
        } else {
            // Render task creation form
        }
    }
}

