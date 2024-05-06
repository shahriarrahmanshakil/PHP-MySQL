<?php

$text="This is the story of pirates. this is the link of http://pirates.com.";


//$text="This is the story of pirates. this is the link of <a href='http://pirates.com'>pirates.com</a>";

echo $text;
echo "<br/>";




$text= preg_replace("/([^ ]*)\.com/","<a href='http://\${0}'>\${0}</a>",$text);

echo $text;


?>