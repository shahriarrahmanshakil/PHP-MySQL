<?php

$foods = array("pasta","steak","fish","potatoes");
$filtered_array = preg_grep("/^p/",$foods);

print_r ($filtered_array);



?>