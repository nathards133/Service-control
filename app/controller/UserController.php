<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        require_once 'app/view/user/index.php';
    }

    // Outros métodos relacionados a usuários (create, update, delete, etc.)
}