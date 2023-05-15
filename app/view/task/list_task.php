<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
<h1>Task List</h1>

<?php if ($userController->isLoggedIn()): ?>
    <p>Olá, <?php echo $_SESSION['user_id']; ?></p>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <a href="../login.php">Login</a>
    <a href="../register.php">Register</a>
<?php endif; ?>

<?php if ($tasks): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><?= $task['title'] ?></td>
                <td><?= $task['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No tasks found.</p>
<?php endif; ?>

</body>
</html>
