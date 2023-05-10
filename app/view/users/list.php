<?php

require_once 'app/model/User.php';
use App\Model\User;

$userModel = new User();
$users = $userModel->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
<h1>Usuários</h1>
    <a href="user_create.php">Adicionar Usuário</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome de Usuário</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="user_view.php?id=<?= $user['id'] ?>">Visualizar</a>
                    <a href="user_edit.php?id=<?= $user['id'] ?>">Editar</a>
                    <a href="user_delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Deseja excluir este usuário?');">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
