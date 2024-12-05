<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    echo "<h1>Account Created</h1>";
    echo "<p>Welcome, " . htmlspecialchars($username) . "! Your account has been successfully created.</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
}
?>
