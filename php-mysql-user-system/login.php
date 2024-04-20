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
        <div>
            <img src="login.jpg" alt="Login form img">
        </div>

        <div style="margin-top:100px; margin-right:30px;">
            <form action="login.php" method="post">
                    <label for="log_email">Email</label><br>
                    <input type="email" id="log_email" name="log_email"><br><br>
                    <label for="log_password">Password</label><br>
                    <input type="password" id="log_password" name="log_password"><br><br>
                    <input type="submit" name="logbtn" value="Login">
                    <p>
                        Not have an Account?
                        <button><a href='signup.php' target="_blank">Sign up</a></button>
                    </p>  
            </form>
        </div>
    </div>
   
</body>
</html>