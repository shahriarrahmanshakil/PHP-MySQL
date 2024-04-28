<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time</title>
</head>
<body>
    <h1>PHP Date and Time</h1>
    <p>The PHP date() function is used to format a date and/or a time.</p>
    <strong>Get a Date</strong><br><br>
    <?php 
        $date1 = date("Y-m-d");
        echo"Today is  $date1 <br>";

        $date2 = date("Y.m.d");
        echo "Today is $date2 <br>";

        $date2 = date("Y-m-d");
        echo "Today is $date2 <br>";

        $day = date("l");
        echo "$day";
    ?>
    <br><br>

        <!-- PHP Tip - Automatic Copyright Year -->
        &copy; 2010-<?php echo date("Y"); ?>
        
    <h5>Get a Time</h5>
</body>
</html>