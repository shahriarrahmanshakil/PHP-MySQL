<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if...else Statements</title>
</head>
<body>
    <h2>PHP if...else Statements</h2>
    <?php
    $a = 89;
    if($a == 78){
        echo "Hello";
    }else{
        echo "Hello Bangladesh";
    }

    #if..elseif...else
    $abc = 55;
    if($abc !== 95){
        echo "what's up?";
    }elseif($abc < 100){
        echo "have a nice day!";
    }else{
        echo "Others";
    }

    ?>
</body>
</html>