<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegEx Functions preg_match_all()</title>
</head>
<body>
    <h1>PHP Regular Expressions</h1>
    <h3>Regular Expression Functions</h3>
    <h4>Using preg_match()</h4>
    <?php
        $text3 = "Visited Beautifull Bangladesh";
        $pattern3 = "/Bangladesh/i";
        echo preg_replace($pattern3,"Nepal",$text3);
    ?>
    <br><br>
    <?php
        $name = "Raihan Molla Raju";
        $pattern4 = "/raju/i";
        echo preg_replace($pattern4,"from Rajshahi",$name)
    ?>
</body>
</html>