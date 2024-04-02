<?php
	$info=array("dog","cat","cow");

	list($a,$b,$c)=$info;
		echo $c;
		echo "<br/>";
?>

<?php
	$str="This is a text";
	list($p,$q,$r,$s)=explode(" ",$str);
		echo $r;
		echo "<br/>";
		echo $s;
?>