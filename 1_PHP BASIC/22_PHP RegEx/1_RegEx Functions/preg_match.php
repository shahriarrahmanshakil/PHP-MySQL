<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegEx Functions preg_match</title>
</head>
<body>
    <h1>PHP Regular Expressions</h1>
    <h3>Regular Expression Functions</h3>
    <h4>Using preg_match()</h4>
    <?php
        $text = "Hello Bangladesh";
        $pattern = "/Bangladesh/i";
        echo preg_match($pattern, $text);
    ?>
</body>
</html>