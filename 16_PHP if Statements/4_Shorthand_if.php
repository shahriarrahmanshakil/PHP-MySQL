<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shorthand if Statements</title>
</head>
<body>
    <h2>PHP Shorthand if Statements</h2>
    <p>Short Hand If</p>
    <?php
        $a = 20;
        if($a < 30) $b = "Short formate practice<br>";
        echo $b;
    ?>

    <p>Short Hand If...Else</p>
    <?php
    $ab = 67;
    $c = $ab <= 10 ? "hello Bangladesh":"Good Day";
    echo $c;
    ?>
</body>
</html>