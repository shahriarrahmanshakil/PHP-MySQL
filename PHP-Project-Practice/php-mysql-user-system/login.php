<?php
    session_start(); #session start here

    $connectwithDB = mysqli_connect('localhost','root','','user_system'); #create connection with database
    
    $emptyemailmessage = $emptypasswordmassage = $loginfailedmassage = ''; #error massage initilaize(empty variable set) 

    if(isset($_POST['btnlogin']))
    {
        $logemail    = $_POST['log_email'];
        $logpassword = $_POST['log_password'];
        
        $md5_password = md5($logpassword); #passwor Encryption function used

        if(empty($logemail))
        {
            $emptyemailmessage = "Input you'r Valid Email"; #error massage set here
        }

        if(empty($logpassword))
        {
            $emptypasswordmassage = "Input you'r Valid Password"; #error massage set here
        }

        if(!empty($logemail) && !empty($logpassword))
        {
            $selectdata = "SELECT * FROM signup_form 
                           WHERE email = '$logemail' AND password = '$md5_password' "; #query_lnguage_used for select data from database 
            $querydata  = mysqli_query($connectwithDB,$selectdata);

            $arraydata  = mysqli_fetch_assoc($querydata); #query_data converted to array

            if( $arraydata == TRUE)
            {
                $_SESSION['login'] = 'login success'; #session variable set
                header('location:dashboard.php');
            }else{
                $loginfailedmassage = 'Please Enter valid Email and Password'; #error massage set here
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
        <link rel="stylesheet" href="login.css"> <!--css file added-->
    </head>
    
    <body>
        <div style="display: flex; justify-content:space-between;">

            <div style="margin-left: 60px;">
                <img src="login.jpg" alt="Login form img" width="500px" height="500px">
            </div>

            <div style="margin-top:120px; margin-right:200px;">
                <form action="login.php" method="post">
                    <label for="log_email">Email</label><br>
                    <input type="email" id="log_email" name="log_email"> <br>
                    <?php if(isset($_POST['btnlogin'])){echo "<span style = 'color:red;'> $emptyemailmessage </span>";}?><br><br>   <!--error massage used here -->
                    
                    <label for="log_password">Password</label><br>
                    <input type="password" id="log_password" name="log_password"> <br>
                    
                    <?php if(isset($_POST['btnlogin'])){echo "<span style = 'color:red;'> $emptypasswordmassage </span>";}?>        <!--error massage used here -->
                    <?php if(isset($_POST['btnlogin'])){echo "<span style = 'color:red;'> $loginfailedmassage </span>";}?>          <!--error massage used here -->
                    <?php if(isset($_GET['UserCreated'])){echo "<span style ='color:green;'> User Created Succesfully </span>";} ?> <!--error massage used here -->
                    
                    <br><br>
                    
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