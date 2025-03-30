<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function loginUser($username, $password) {
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        return true;
    }

    return false;
}

function logoutUser() {
    session_unset();
    session_destroy();
}
?>