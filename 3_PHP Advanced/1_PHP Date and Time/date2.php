<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
</head>
<body>
    <h1>PHP Date and Time</h1>
    <?php
    echo "Today is " . date("d m Y l")."<br>";
    echo "Today is " . date("d - m - Y - l")."<br>";
    echo "Today is " . date("d / m / Y / l")."<br>";
    echo "Today is " . date("d : m : Y : l")."<br>";
    echo date("l");
    ?>
    <h2>PHP Tip - Automatic Copyright Year</h2>
        &copy; 2020 - <?php echo date("Y");?><br>
        &rAarr;Shahriar Rahman Shakil
    
        <h2>Get a Time</h2>
    <?php
        echo "The time is " . date("h:i:sa")."<br>";
        echo "The time is " . date("h:i:sa");
    ?>

    <h2>Get my Time Zone</h2>
    <?php
        date_default_timezone_set("Asia/Dhaka");
        echo "The Current time is ".date("h : i : s a");
    ?>

    <h2>Create a Date With mktime()</h2>
    <?php
        $t = mktime(10, 50, 22, 10, 22, 2020);
        echo date("Y m d h:i:sa", $t);  
    ?>
</body>
</html>