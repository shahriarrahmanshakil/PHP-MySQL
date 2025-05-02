<?php
$connect = mysqli_connect('localhost','root','','signin_signup');
    if($_POST['btnsubmit']){
       $usname =  $_POST['usname']; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="usname">username</label>
            <input type="text" id="usname" name="usname">
        </div>
        <br>
        <div>
            <label for="upass">password</label>
            <input type="password" id="upass" name="upass">
        </div>
        <br>
        <div>
            <input type="submit" name="btnsubmit" value="Submit">
        </div>

        <div>
            <p>
                Don't have an Account?
                <a href="signup.php">Signup</a>
            </p>
        </div>

    </form>
</body>
</html>