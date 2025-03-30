<?php
include_once '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    updateTask($task_id, $title, $description, $start_date, $end_date);
    header("Location: tasks.php");
}

$task_id = $_GET['id'];
$task = getTaskById($task_id);
?>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
    <label for="title">Task Title</label>
    <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
    <label for="description">Description</label>
    <textarea name="description" required><?php echo $task['description']; ?></textarea>
    <label for="start_date">Start Date</label>
    <input type="date" name="start_date" value="<?php echo $task['start_date']; ?>" required>
    <label for="end_date">End Date</label>
    <input type="date" name="end_date" value="<?php echo $task['end_date']; ?>" required>
    <button type="submit">Update Task</button>
</form>