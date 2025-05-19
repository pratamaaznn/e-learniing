<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Learning School</title>
    <style>
        body {
            background-color: #e6f0fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 400px;
            background: #fff;
            padding: 30px;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container img {
            width: 120px;
        }
        .input-group {
            margin: 15px 0;
            text-align: left;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 12px;
            width: 100%;
            background: #1e4dd8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="back-link"><a href="index.php">← back</a></div>

<div class="login-container">
    <img src="image/logo.jpg" alt="Logo"><br>
    <h3>Learning School</h3>
    <form action="proses_login.php" method="post">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Masuk</button>
    </form>
</div>

</body>
</html>
