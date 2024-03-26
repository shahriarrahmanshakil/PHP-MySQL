<?php
session_start();

if(isset($_POST["btnsubmit"])){
    $username = $_POST["username"];
    $userpassword = $_POST["userpassword"];

    if($username == "wdpf" &&  $userpassword == "12345" ){
        $_SESSION["sessionName"] = $username;
        header("location:reg.php");
        
    }else{
        echo "Name and Password are incorrect";
    }
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
    <form action="#" method="post">
        <label for="name">Name</label>
        <input type="text" id= "name" name="username"><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="userpassword"><br><br>
        <input type="submit" value="Login" name="btnsubmit">
    </form>
</body>
</html>