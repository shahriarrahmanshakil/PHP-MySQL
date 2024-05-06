<?php
	/*function area($w,$h){
		return $w*$h;
	}
	
	$area=area(2,6);
	echo $area;
?>*/



	function area($w,$h,&$p){
		$p=2*($w+$h);
		return $w*$h;
	}
	$p;
	$area=area(2,6,$p);
	echo $area;
	echo "<br/>";
	echo $p;
?>