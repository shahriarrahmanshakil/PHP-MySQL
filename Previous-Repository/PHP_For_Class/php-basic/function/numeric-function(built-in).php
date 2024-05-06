<?php 
//numeric[is_numeric(),round(),rand(),]
function num(){ 
    echo is_numeric(12);
}
num();
echo "<br>";

function num2(){ 
    echo ("Round: ".round(34.3545));
}

num2();
echo "<br>";
function num3(){ 
    echo ("Random Number: ".rand(1000,9999));
}

num3();
?>