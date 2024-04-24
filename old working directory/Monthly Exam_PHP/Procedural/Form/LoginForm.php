<?php
session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == 'shakil' && $password == '12345'){
            $_SESSION['username'] = $username;
            header("location:RegistrationForm.php");
        }else{
        echo "<span style= color:red>You'r username or password incorrect</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset style="width: fit-content; background-color:aquamarine">
        <label for="username">User Name</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login" name="login">
        </fieldset>
    </form>
</body>
</html>