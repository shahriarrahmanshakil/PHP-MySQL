<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:LoginForm.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text">
    <input type="submit">
    <a href="LogoutForm.php">
        <button>Logout</button>
    </a>
</body>
</html>