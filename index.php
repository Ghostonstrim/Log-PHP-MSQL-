<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to your app</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php require 'partials/header.php' ?>
    
    <h1>Please Login or SingUp</h1>

    <a href="login.php">Login</a>
    <a href="singup.php">SingUp</a>
</body>
<style>
    header {
        border-bottom: 2px solid #eee;
        padding: 20px 0;
        margin-bottom: 10px;
        width: 100%;
        text-align: center;
    }

    header a {
        text-decoration: none;
        color: #333;
    }
</style>
</html>

