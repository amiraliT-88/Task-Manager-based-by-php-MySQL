<?php
include_once '../includes/db.php';
$tasks = getAllTasks();
include_once '../templates/header.php';
?>
<h1>Your Tasks</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?php echo htmlspecialchars($task['title']); ?></td>
        <td><?php echo htmlspecialchars($task['description']); ?></td>
        <td><?php echo $task['start_date']; ?></td>
        <td><?php echo $task['end_date']; ?></td>
        <td><a href="edit-task.php?id=<?php echo $task['id']; ?>">Edit</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once '../templates/footer.php'; ?>