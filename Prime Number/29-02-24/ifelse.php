<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="text">
    <input type="submit" name="submit">
    </form>
   
<?php
$number=$_GET["text"];
$submit=$_GET["submit"];

// if($number >= $number1){
//     echo "Bangladesh";
// }

// switch(){

// }


// if($number > $number1 && $number > $number2){
//     echo "This is Working";
// }

if (isset($submit) && !empty($number)) {
    $newAr=str_split($number);
    echo $newAr;
  
    
}

?>
</body>
</html>