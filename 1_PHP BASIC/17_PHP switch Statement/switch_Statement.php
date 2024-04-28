<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP switch Statement</title>
</head>
<body>
    <h1>PHP switch Statement</h1>
    <br>
    <?php
    $x = 234;
    switch($x){
        case 200:
            echo "This is right Number";
            break;
        case 233:
            echo "This is right Number";
            break;
        case 234:
            echo "This is right Number 234";
            break;
        default:
            echo "This is Default"; 
    }
    
    ?>
</body>
</html>