<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP_input</title>
    <style>
        input[type=submit]{
            width: 180px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>PHP Form Handling</h1>
    <h6>The PHP superglobals $_GET and $_POST are used to collect form-data.</h6>
    <h3>use POST Method</h3>
    <hr>
    <br><br>
    <form action="wellcome_post.php" method="post"> <!--use post method-->
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br><br>
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>