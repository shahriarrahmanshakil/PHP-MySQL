<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP_input</title>
</head>
<body>
    <form action="wellcome.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>