<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    private User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function register(array $userData): bool
    {
        return $this->userModel->create($userData);
    }

    public function login(array $credentials): bool
    {
        $user = $this->userModel->authenticate($credentials['email'], $credentials['password']);

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            return true;
        }

        return false;
    }

    public function logout(): void
    {
        session_destroy();
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }
}
