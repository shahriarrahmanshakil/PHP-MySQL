<?php
session_start();

if(isset($_POST['btnsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'shahriar' && $password == '98765'){
            $_SESSION['sessionName'] = $username;
            header("location:Registration.php");
    }else{
        $message = "Username or Password is incorrect";
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
    <?php
        echo isset($message)?$message:"";
    ?>
    <form action="#" method="post">
        <label for="username">User Name</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>