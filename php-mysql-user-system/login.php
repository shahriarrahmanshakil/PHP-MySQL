<?php
    session_start();
    $connectwithDB = mysqli_connect('localhost','root','','user_system');
    
    $emptyemailmessage = $emptypasswordmassage = '';
    if(isset($_POST['btnlogin'])){
        $logemail    = $_POST['log_email'];
        $logpassword = $_POST['log_password'];
        
        $md5_logpassword = md5($logpassword);

        if(empty($logemail)){
            $emptyemailmessage = "Input you'r Valid Email";
        }

        if(empty($logpassword)){
            $emptypasswordmassage = "Input you'r Valid Password";
        }

        if(!empty($logemail) && !empty($logpassword)){
            $selectdata = "SELECT * FROM signup_form 
                           WHERE email = '$logemail' AND password = '$md5_logpassword' ";
            if(mysqli_query($connectwithDB,$selectdata) == TRUE ){
                $_SESSION['login'] = 'login success';
                header('location:dashboard.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div style="display: flex; justify-content:space-between;">
        <div style="margin-left: 60px;">
            <img src="login.jpg" alt="Login form img" width="500px" height="500px">
        </div>

        <div style="margin-top:120px; margin-right:200px;">
            <?php if(isset($_GET['UserCreated'])){echo "User Created Succesfully" ; }  ?>
            <form action="login.php" method="post">
                    <label for="log_email">Email</label><br>
                    <input type="email" id="log_email" name="log_email" value="<?php if(isset($_POST['btnlogin'])){echo $logemail;}?>"> <br>
                    <?php if(isset($_POST['btnlogin'])){echo "<span style = 'color:red;'> $emptyemailmessage </span>";}?><br><br>
                    
                    <label for="log_password">Password</label><br>
                    <input type="password" id="log_password" name="log_password"  value="<?php if(isset($_POST['btnlogin'])){echo $logpassword;}?>"><br>
                    <?php if(isset($_POST['btnlogin'])){echo "<span style = 'color:red;'> $emptypasswordmassage </span>";}?><br><br>
                    <input type="submit" name="btnlogin" value="Login">
                    <p>
                        Not have an Account?
                        <button><a href='signup.php' target="_blank">Sign up</a></button>
                    </p>  
            </form>
        </div>
    </div>
   
</body>
</html>