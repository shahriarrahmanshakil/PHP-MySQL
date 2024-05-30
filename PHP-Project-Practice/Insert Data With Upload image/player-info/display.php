<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
</body>
</html>
<?php
    if(isset($_POST['btnsubmit'])){
        $playerName =$_POST['playerName'];
        $jurseyNumber = $_POST['jurseyNumber'];
        echo $playerName;
        echo $jurseyNumber;

    }
?>
