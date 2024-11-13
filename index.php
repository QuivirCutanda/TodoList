<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form action="add_task.php" method="POST">
    <input type="text" name="task" placeholder="Enter new task" required>
    <button type="submit">Add Task</button>
</form>, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
<form action="add_task.php" method="POST">
    <input type="text" name="task" placeholder="Enter new task" required>
    <button type="submit">Add Task</button>
</form>
<?php include 'db.php'; ?>

<h1>To-Do List</h1>
<table>
    <tr>
        <th>Task</th>
        <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM tasks");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['task'] . "</td>";
        echo "<td>
                <a href='edit_task.php?id=" . $row['id'] . "'>Edit</a> | 
                <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>