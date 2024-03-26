<?php
session_start();
if(isset($_POST["btnlogin"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "shakil" && $password == "shakil123"){
        $_SESSION["sessionName"] = $username;
        header("location:reg.php");
    }else{
        $message = "<span style='color:red'>Username or Password is incorrect</span>";
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
    <?php
        echo isset($message)? $message:" ";
    ?>
    <form action="" method="post">
        <label for="username">User Name</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password"><br><br>
        <input type="submit" value="Submit" name="btnlogin">
    </form>
</body>
</html>