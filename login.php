<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3b82f6, #9333ea);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .result-container {
            background: #fff;
            color: #333;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
        }
        .back-link {
            margin-top: 15px;
            display: block;
            color: #3b82f6;
            text-decoration: none;
            font-size: 14px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // ตัวอย่างข้อมูลผู้ใช้สำหรับการทดสอบ
            $valid_username = "admin";
            $valid_password = "12345";

            if ($username === $valid_username && $password === $valid_password) {
                echo "<h1 style='color: green;'>Login Successful</h1>";
                echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
            } else {
                echo "<h1 style='color: red;'>Login Failed</h1>";
                echo "<p>Invalid username or password.</p>";
            }
        }
        ?>
        <a href="index.html" class="back-link">Go back to login</a>
    </div>
</body>
</html>
