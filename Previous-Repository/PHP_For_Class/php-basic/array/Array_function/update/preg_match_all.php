<?php

preg_match_all("/is/","This is a text",$output);

print_r($output);
echo "<br/>";

print_r(count($output[0]));
?>