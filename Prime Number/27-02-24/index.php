<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST'){
//     $SCORE = isset($_POST['score']) ? (int)$_POST['score'] : 0;

//         switch(true){
//         case $score >= 80 && $score <= 100:
//             echo "You'r Result : A+";
//             break;
//         case $score >= 70 && $score <= 79:
//             echo "You'r Result : A";
//             break;
//         case $score >= 60 && $score <= 69:
//             echo "You'r Result : A-";
//             break;
//         case $score >= 50 && $score <= 59:
//             echo "You'r Result : B";
//             break;
//         case $score >= 40 && $score <= 49:
//             echo "You'r Result : C";
//             break;
//         case $score >= 33 && $score <= 39:
//             echo "You'r Result : D";
//             break;
//         case $score > 100:
//             echo '<script> alert("you enter above 100"); </script>';
//             break;
//         default:
//             echo "You'r Result : Fail";    
//     }
// }

?>
    <form method="post" action="">
        <label for="score">Enter You'r Score</label>
        <input type="number" name ="score" id="score" required>
        <button type="submit">Submit</button>        
    </form>

</body>
</html> -->

<?php

$a = 1;
if(isset($a)){
    echo "Hello Bangladesh";
}

?>



