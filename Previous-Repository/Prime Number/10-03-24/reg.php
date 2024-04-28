<?php
session_start();
if(!isset($_SESSION["sessionName"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="#" method="post">
        <label for="id">ID</label>
        <input type="text" id="id" name="id"><br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email</label>
        <input type="email"  id="email" name="email"><br><br>
        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
