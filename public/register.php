<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registrar Usuário</h1>
    <form action="app/controller/UserController.php?action=register" method="post">
        <label for="username">Nome de usuário:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
