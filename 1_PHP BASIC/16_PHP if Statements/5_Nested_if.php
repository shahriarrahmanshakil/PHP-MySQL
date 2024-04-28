<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nested if Statement</title>
</head>
<body>
    <h1>PHP Nested if Statement</h1>
    <p>Nested If</p>
    <small>You can have if statements inside if statements, this is called nested if statements.</small>
    <br><br>
    <?php
        $x = 43;
        if($x !== 90){
            echo "Nested if Practice<br>";
            if($x < 14){
                echo "this is wrong Number<br>";
            }else{
                echo "Nested Else is Executed<br>";
            }
        }
    ?>
</body>
</html>