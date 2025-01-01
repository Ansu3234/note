<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
include 'db.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM notes WHERE user_id='$user_id'";
$result = $conn->query($sql);
$notes = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $notes[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: white;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        li a {
            margin-left: 10px;
            padding: 5px 10px;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }

        li a:hover {
            background-color: #0056b3;
        }

        .back {
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

        .back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>My Notes</h1>
    <div class="nav">
        <a href="add_note.php">Add Note</a>
    </div>
    <ul>
        <?php foreach ($notes as $note) : ?>
            <li>
                <?php echo htmlspecialchars($note['content']); ?>
                <a href="edit_note.php?id=<?php echo $note['id']; ?>">Edit</a>
                <a href="delete_note.php?id=<?php echo $note['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="back" href="dashboard.php">Back to Dashboard</a>
</body>
</html>