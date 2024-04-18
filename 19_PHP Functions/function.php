<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<body>
    <h2>PHP Functions</h2>
    <?php
        #create_Basic_function 
        function mymessage(){
            echo "Hello Bangladesh";
        }
        mymessage();
    ?>

    <h4>PHP Function Arguments</h4>
    <?php
        function name($fullname){
            echo "$fullname";
        }
        name("Shahriar Rahman Shakil<br>");
        name("Rakibul Islam");
    ?>
    
    <br><br>
    
    <?php
        function nameanddob($fullname,$birthdate){
            echo "$fullname.$birthdate";
        }
        name("Shahriar Rahman Shakil,1997<br>");
        name("Rakibul Islam,1995");
    ?>

    <h5>PHP Default Argument Value</h5>
    <?php
        function defaultagvalue($defaultvalue = 100){
            echo "Default Value $defaultvalue<br>";
        }
        defaultagvalue(50);
        defaultagvalue(150);
        defaultagvalue(250);
        defaultagvalue(350);
        defaultagvalue();
        defaultagvalue(550);

    ?>
    <h4>PHP Functions - Returning values</h4>
    <?php
        function sum($a,$b){
            $c = $a + $b;
            return $c;
        }
        echo "10+20 = ".sum(10,20)."<br>";
        echo "30+20 = ".sum(30,20);
    ?>

    <h3>Passing Arguments by Reference</h3>
    <?php
        function passargubyreff(&$value){
            $value += 10;
        }
        $number = 5;
        passargubyreff($number);
        echo $number;
    ?>

</body>
</html>