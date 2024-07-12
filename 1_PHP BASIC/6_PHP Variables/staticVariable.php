<?php
//Static KeyWord

function staticVariable(){
    $a = 10;
    echo $a;
    $a++;
} 
staticVariable();
echo "<br>";
staticVariable();
echo "<br>";
staticVariable();
echo "<br>";
echo "<br>";

echo "Static Variable";
echo "<br>";
function usingStatic(){
    static $a = 20;
    echo $a;
    $a++;
}
usingStatic(); //20
echo "<br>";
usingStatic(); //21
echo "<br>";
usingStatic(); //22
echo "<br>";
usingStatic(); //23
echo "<br>";









?>