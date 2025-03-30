<?php
include_once '../includes/auth.php';
if (!isLoggedIn()) {
    header("Location: login.php");
    exit();
}
include_once '../templates/header.php';
?>
<h1>Welcome to Dashboard</h1>
<a href="tasks.php">Go to Tasks</a>
<?php include_once '../templates/footer.php'; ?>