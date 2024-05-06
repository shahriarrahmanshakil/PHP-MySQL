<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP include files Example</title>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    
    <h1>PHP Include Files</h1>
    <p>The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.</p>

    <?php
        require("form.php");
    ?>
    <?php
        require_once("footer.php");
    ?>
</body>
</html>