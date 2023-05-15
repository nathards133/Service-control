<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="user_controller.php?action=login" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
