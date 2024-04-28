<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for Loop</title>
</head>
<body>
    <h1>for Loop</h1>
    <p>The for loop is used when you know how many times the script should run</p>
    <span>Print the numbers from 0 to 10:</span><br>
            <?php
                for($x = 0; $x <= 10; $x++){
                    echo $x.'<br>';
                }
            ?>

    <p>The break Statement</p>
    <span>Stop the loop when $i is 5:</span><br>
            <?php
                for($a = 0; $a <= 10; $a++){
                    if($a == 5)break;
                    echo $a.'<br>';
                }
            ?>
    <p>The continue Statement</p>
    <span>Stop, and jump to the next iteration if $i is 5:</span><br>
            <?php
                for($x = 0; $x <= 10; $x++){
                    if($x == 5)continue;
                    echo $x.'<br>';
                }
            ?>

    <br><br>
    <p>Step 10</p>
    <span>This example counts to 100 by tens:</span><br><br>
            <?php
                for($j = 0; $j <= 100; $j+=10){
                    echo 'The Number is : '.$j.'<br>';
                }
            ?>
                
</body>
</html>