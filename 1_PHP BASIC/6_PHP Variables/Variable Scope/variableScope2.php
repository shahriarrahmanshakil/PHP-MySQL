<?php
//PHP Variable Scope
// Local Scope and Global Scope

$a = 10;
$b = 20;

function sum(){
    global $a, $b;
    echo $c = $a + $b; 
}
sum();
echo "<br>";

//also we use global variable by $GLOBALS[index]
function add(){
    echo $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
add();
echo "<br>";

///////////////////////////////////////////////////////////////////

$x = 100;
$y = 200;
//using this variable by global keyword
//using this variable by $GLOBALS['index'] #index holds variable name

function test1(){
    global $x, $y;
    echo $z = $x + $y;
}
test1();

echo "<br>";


function test2(){
    echo $GLOBALS['z'] = $GLOBALS['x'] / $GLOBALS['y']; 
}
test2();












?>