<!DOCTYPE html>
<html>
<head>
    <title>Note App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('image.jpg'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;
        }

        .header {
            background-color: rgba(0, 123, 255, 0.8);
            padding: 10px;
            text-align: center;
            color: white;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .header a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }

        .header a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
    <h1>Welcome to Note App</h1>
</body>
</html>