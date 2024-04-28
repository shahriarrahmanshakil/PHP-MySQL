<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial in php</title>
</head>
<body>
    <h2>Factorial Number</h2>
    <form action="#" method="post">
        <label for="enum">Enter You'r Positive Number</label>
        <input type="text"  id="enum" name="enum">
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['btnsubmit'])){
        $factorialNumber = 1;
        $number = $_POST['enum'];
        for($i = 1; $i <= $number;$i++){
            $factorialNumber = $factorialNumber * $i;
        }
        echo "<br>";
        echo "Factorial Number is ".$factorialNumber;
    }
?>