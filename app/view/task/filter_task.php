<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filtrar Tarefas</title>
</head>
<body>
    <h1>Filtrar Tarefas</h1>
    <form action="task_controller.php?action=filter" method="post">
        <label for="search_title">Título:</label>
        <input type="text" name="search_title" id="search_title"><br>

        <label for="search_description">Descrição:</label>
        <input type="text" name="search_description" id="search_description"><br>

        <label for="search_deadline">Prazo:</label>
        <input type="date" name="search_deadline" id="search_deadline"><br>

        <input type="submit" value="Filtrar Tarefas">
    </form>

    <h2>Tarefas Filtradas</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Prazo</th>
            </tr>
        </thead>
        <tbody
            <?php foreach ($tasks as $task) { ?>
                <tr>
                    <td><?php echo $task['title']; ?></td>
                    <td><?php echo $task['description']; ?></td>
                    <td><?php echo $task['deadline']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>


