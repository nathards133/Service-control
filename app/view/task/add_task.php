<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Tarefa</title>
</head>
<body>
    <h1>Adicionar Tarefa</h1>
    <form action="task_controller.php?action=create" method="post">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="deadline">Prazo:</label>
        <input type="date" name="deadline" id="deadline" required><br>

        <input type="submit" value="Adicionar Tarefa">
    </form>
</body>
</html>
