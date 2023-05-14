<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="task_controller.php?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">

        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?php echo $task['title']; ?>" required><br>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required><?php echo $task['description']; ?></textarea><br>

        <label for="deadline">Prazo:</label>
        <input type="date" name="deadline" id="deadline" value="<?php echo $task['deadline']; ?>" required><br>

        <input type="submit" value="Salvar Alterações">
    </form>
</body>
</html>
