<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preg_match_all</title>
</head>
<body>
    <h1>PHP Regular Expressions</h1>
    <h3>Regular Expression Functions</h3>
    <h4>Using preg_match_all()</h4>
    <?php
        $text = "Hello World";
        $pattern = "/l/i";
        echo preg_match_all($pattern,$text);
    ?>
</body>
</html>