<?php
include_once '../includes/db.php';
$tasks = getAllTasks();
include_once '../templates/header.php';
?>
<h1>All Tasks</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
    </tr>
    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?php echo htmlspecialchars($task['title']); ?></td>
        <td><?php echo htmlspecialchars($task['description']); ?></td>
        <td><?php echo $task['start_date']; ?></td>
        <td><?php echo $task['end_date']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once '../templates/footer.php'; ?>