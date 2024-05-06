<?php
	// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
		foreach (range(2, 4) as $number) {
    		print_r($number);
			echo "<br/>";
		}
?>

<?php
	//array("a","b","c","d","e","f");
	foreach (range("c","f") as $letter){
			print_r($letter);
			echo "<br/>";
	}
?>

<?php
	$number=range(9,90,9);
		print_r($number);
		echo "<br/>";
?>

<?php
	$timetable=range(6,120,6);
		print_r($timetable);
		echo "<br/>";
?>

