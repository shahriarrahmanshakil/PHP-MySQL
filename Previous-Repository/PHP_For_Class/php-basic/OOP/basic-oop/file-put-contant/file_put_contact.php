<?php
echo file_put_contents("store.txt","hello");

echo "<br>";
//explode() function
// explode(separator,string,limit);
$data ="this is our php class";

print_r(explode(" ",$data,2))
?>