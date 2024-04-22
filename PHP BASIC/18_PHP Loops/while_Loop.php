<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP while Loop</title>
</head>
<body>
    <h2>PHP while Loop</h2>
    <p>The while loop - Loops through a block of code as long as the specified condition is true.</p>
    <small>Print $i as long as $i is less than 6:</small><br>
        <?php
            $i = 0;
            while($i < 6){
                echo $i.'<br>';
                $i++;
            }
        ?>
    <br><br>

    <p>The break Statement</p>
    <small>Stop the loop when $x is 7:</small><br>
        <?php
            $x = 0;
            while($x <= 10){
                $x++;
                if($x == 7) break;
                echo $x.'<br>';
            }
        ?>
    <br><br>
    
    <p>The continue Statement</p>
    <small>Stop, and jump to the next iteration if $i is 7:</small><br>
            <?php
                $a = 0;
                while($a <= 15){
                    $a++;
                    if($a == 7) continue;
                    echo $a.'<br>';
                    
                }
            ?>
    <br><br>

    <p>Alternative Syntax</p>
    <small>Print $i as long as $i is less than 6:</small><br>
                <?php
                    $i = 1;
                    while($i<6):
                        echo $i.'<br>';
                        $i++;
                    endwhile;     
                ?>
    <br><br>

    <p>Step 10</p>
    <small>If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:</small><br>
                    <?php
                    $s = 0;
                    while($s < 100){
                        $s += 10;
                        echo $s.'<br>';
                    }
                    ?>
    <br><br><br>
    <footer style="background-color:gray; height:30px;">
        &copy;Shahriar Rahman Shakil
    </footer>
</body>
</html>