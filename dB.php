<?php
include_once '../config/config.php';

function getAllTasks() {
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM tasks");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addTask($title, $description, $start_date, $end_date) {
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO tasks (title, description, start_date, end_date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $description, $start_date, $end_date]);
}
?>