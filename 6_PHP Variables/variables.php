<?php
echo `Variables are "containers" for storing information.`;
echo "<br>";

#variables starts with $ sign;
$x = 10;
$number = 20;

//variable names are case-sensitive!
?>

<?php
//To get the data type of a variable, use the var_dump() function.
$message = 'Hello Bangladesh';
$number1 = 890;

var_dump($message); //this statement shows data type.
var_dump($number1); 
?>

<?php
#Assign Multiple Values
$a = $b = $c = "Bangladesh"; //useing multiple variable asing one value.

echo $c;
?>