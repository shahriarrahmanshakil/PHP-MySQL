<?php 
$time = time();
echo "<br>";

// echo date('d-m-Y');
// echo "<br>";
// echo date('L');
// echo "<br>";
echo date('h:i:s a');
echo "<br>";
echo date('h:i:s a', $time+120);

// echo date('A');
echo "<br>";
echo date('r');

echo "<br>";
// time Zone
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
echo "<br>";

$d=strtotime("10:30am May 15 2023");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
//getDate method 
$date_array = getdate();
   
foreach ( $date_array as $key => $val ){
   print "$key = $val<br />";
}
 
$formated_date  = "Today's date: ";
$formated_date .= $date_array['mday'] . "/";
$formated_date .= $date_array['mon'] . "/";
$formated_date .= $date_array['year'];

print $formated_date;

?>
