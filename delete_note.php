<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM notes WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Note</title>
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
        <h1>Note Deleted</h1>
        <a href="home.php">Back to Notes</a>
    </div>
</body>
</html>