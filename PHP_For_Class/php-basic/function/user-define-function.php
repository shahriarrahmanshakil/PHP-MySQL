<?php 
//user define function

function Info (){ 
    echo "This is my First page!";
}
Info ();
echo "<br>";

function name($num1, $num2){ 
    echo $num1+$num2;
}

name(3,4);

echo "<br>";
//return keyword

function Info2(int $x,int $y){ 
    $t =$x+$y;
    return $t;
}

echo Info2(5,3);
echo "<br>";

function country($name,$year){ 
    echo "$name is our country $year Indepandance day";
}
country("Bangladesh",1971);
?>