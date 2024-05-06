
<?php 

//multidimentional Array
$name = array( 
    array("Rafia",130,"Mirpur"),
    array("Shahin",121,"Tongi"),
    array("Tuhin",232,"Uttora"),
    array("Meem",202,"Badda")
);

echo $name[1][2];
echo "<br>";
//PHP Associative Arrays->name and value

$name2 = array("Mamun"=>211,"Shakil"=>12);
echo $name2["Shakil"];

echo "<br>";


$num = Array("A","B","C","D","E");

foreach($num as $key=>$value){ 
    echo $key.' '.$value ." ,";
}
echo "<h1>hello</h1>";

//Index Array(Atumatically or menually)

$nam =array();
$nam[0]="Meem";
$nam[1]="Sharmin";
$nam[2]="Shakil";
$nam[3]="Rakib";

echo $nam[2];



?>
