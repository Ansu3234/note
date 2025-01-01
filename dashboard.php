<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .nav {
            text-align: center;
            margin-top: 20px;
        }

        .nav a {
            margin: 0 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }

        .nav a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <div class="nav">
        <a href="home.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>