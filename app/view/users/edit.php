<?php
require_once 'app/model/User.php';
use App\Model\User;

$userModel = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel->update($_GET['id'], $_POST);
    header('Location: user_list.php');
} else {
    $user = $userModel->getById($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form method="post">
        <label>
            Nome de Usuário:
            <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
        </label><br>
        <label>
            Email:
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </label><br>
        <label>
            Senha:
            <input type="password" name="password" value="<?= htmlspecialchars($user['password']) ?>" required>
        </label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="user_list.php">Voltar</a>
</body>
</html>
