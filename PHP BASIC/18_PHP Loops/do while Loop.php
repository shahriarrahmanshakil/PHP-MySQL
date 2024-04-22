<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while Loop</title>
</head>
<body>
    <h2>do while Loop</h2>
    <small> >>Print $i as long as $i is less than 10:</small><br>
        <?php
            $i = 1;
            do{
                echo $i.'<br>';
                $i++;
            }while($i < 10);
        ?>
    
    <p>The break Statement</p>
    <small>Stop the loop when $x is 5:</small><br>
        <?php
            $x = 0;
            do{
                if($x == 5)break;
                echo $x,"<br>";
                $x++;
            }while($x <= 10);
        ?>
    
    <p>The continue Statement</p>
    <small>Stop, and jump to the next iteration if $a is 5:</small><br>
        <?php
            $a = 0 ;
            do{
                $a++;
                if($a == 5)continue;
                echo $a.'<br>';
            }while($a < 10);
        ?>
</body>
</html>