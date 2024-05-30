<?php
$connect = mysqli_connect('localhost','root','','signin_signup');

    if(isset($_POST['btnsubmit'])){
        $username = $_POST['uname'];
        $password = $_POST['password'];

        $sql = "INSERT INTO user_data (username,password)
                VALUES('$username', '$password')";
        mysqli_query($connect,$sql);
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up Form</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="uname">username</label>
            <input type="text" id="uname" name="uname"><br><br>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password"><br><br>
        </div>
        <div>
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword"><br><br>
        </div>
        <div>
            <input type="submit" name="btnsubmit" value="Submit">
        </div>
        <div>
            <p>
                Already have an Account?
                <a href="signin.php">Signin</a>
            </p>
        </div>
    </form>
</body>
</html>