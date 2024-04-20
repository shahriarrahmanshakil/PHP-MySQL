<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <label for="log_email">Email</label><br>
        <input type="email" id="log_email" name="log_email"><br><br>
        <label for="log_password">Password</label><br>
        <input type="password" id="log_password" name="log_password"><br><br>
        <input type="submit" name="logbtn" value="Login">
    </form>
    <p>
        Not have an Account?
        <button><a href='signup.php' target="_blank">Signup</a></button>
    </p>
</body>
</html>