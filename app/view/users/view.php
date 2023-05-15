<?php
require_once 'app/model/User.php';
use App\Model\User;

$userModel = new User();
$user = $userModel->getById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuário</title>
</head>
<body>
    <h1><?= htmlspecialchars($user['username']) ?></h1>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <a href="user_list.php">Voltar</a>
</body>
</html>
