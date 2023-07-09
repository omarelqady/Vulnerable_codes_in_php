<!DOCTYPE html>
<!-- SHOW.PHP-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDOR</title>
</head>
<body>
    <?php
$sql = "SELECT tasks.id, tasks.user_id, tasks.task_name, tasks.day, tasks.time, users.username
FROM tasks
INNER JOIN users ON tasks.user_id = users.id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
        <thead>
            <tr>
                <th>Task ID</th>
                <th>User ID</th>
                <th>Task Name</th>
                <th>Day</th>
                <th>Time</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task['id']; ?></td>
                <td><?php echo $task['user_id']; ?></td>
                <td><?php echo $task['task_name']; ?></td>
                <td><?php echo $task['day']; ?></td>
                <td><?php echo $task['time']; ?></td>
                <td><?php echo $task['username']; ?></td>
                <td>
                    <a href="delete.php?taskid=<?php echo $task['id']; ?>">Delete Task</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<!-- DELETE.PHP --> 
<!--  $deleteSql = "DELETE FROM tasks WHERE id = :task_id AND user_id = :user_id";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->execute(array(':task_id' => $task_id, ':user_id' => $user_id));
        header('Location: show.php');
        exit();
            -->