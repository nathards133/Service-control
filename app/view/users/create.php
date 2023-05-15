<?php
require_once 'app/model/User.php';
use App\Model\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel = new User();
    $userModel->create($_POST);
    header('Location: user_list.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Usuário</title>
</head>
<body>
    <h1>Adicionar Usuário</h1>
    <form method="post">
        <label>
            Nome de Usuário:
            <input type="text" name="username" required>
        </label><br>
        <label>
            Email:
            <input type="email" name="email" required>
        </label><br>
        <label>
            Senha:
            <input type="password" name="password" required>
        </label><br>
        <button type="submit">Adicionar Usuário</button>
    </form>
    <a href="user_list.php">Voltar</a>
</body>
