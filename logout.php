<?php
session_start();
session_destroy();
header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .message {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>You have been logged out</h1>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>