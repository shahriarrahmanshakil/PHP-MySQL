<?php

$fruits = array("apple","orange","banana");

$fruit = next($fruits); //returns "orange"
$fruit = next($fruits); //returns "banana"
$fruit = prev($fruits); //returns "orange"
$fruit = reset($fruits);

	echo $fruit;

//next index will show this function.
//prev will show the previous index with the help of this function.
//reset will show the first index of the array.


?>