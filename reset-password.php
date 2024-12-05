<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    echo "<h1>Password Reset</h1>";
    echo "<p>An email has been sent to " . htmlspecialchars($email) . " with reset instructions.</p>";
}
?>
