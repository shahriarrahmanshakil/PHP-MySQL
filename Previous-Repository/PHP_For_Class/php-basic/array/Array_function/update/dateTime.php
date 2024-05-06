<?php

date_default_timezone_set("Asia/Dhaka");

echo date("d/m/y h:i:s A");
echo "<br/>";

$timestamp=mktime(14,15,0,5,26,2018);

echo date("d M Y h:i:s A",$timestamp);

echo "<br/>";

echo checkdate(2,28,2018);

?>