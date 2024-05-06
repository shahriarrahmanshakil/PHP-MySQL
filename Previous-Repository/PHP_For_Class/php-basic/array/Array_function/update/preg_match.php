<?php

$data="3/34, * Tajmahal Road";

$output = preg_match("/^[0-9,a-zA-Z \/]+$/",$data);

if(!$output){
	echo "Error <br/>";
	
}

//echo $output;

$data2="3/34, * Tajmahal Road";

$output2 = preg_match("/[0-9,a-zA-Z \/]+$/",$data2);

echo $output2;


?>