<?php
include_once '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    addTask($title, $description, $start_date, $end_date);
    header("Location: tasks.php");
}
?>
<form method="POST">
    <label for="title">Task Title</label>
    <input type="text" name="title" required>
    <label for="description">Description</label>
    <textarea name="description" required></textarea>
    <label for="start_date">Start Date</label>
    <input type="date" name="start_date" required>
    <label for="end_date">End Date</label>
    <input type="date" name="end_date" required>
    <button type="submit">Add Task</button>
</form>