<h1>Search For Prime Number</h1>
<form action="#" method="post">
    <input type="number" name="input_number" placeholder="Enter you'r Number" size="40">
    <input type="submit" name="btnsubmit">
</form>

<?php
$input_Num = $_POST["input_number"];
$cheack = 0;

if(isset($_POST["btnsubmit"])){
    if($input_Num == 0 || $input_Num == 1){
        echo "Nor Prime or Composite Number";
        exit();
    }
    for($i = 2; $i < $input_Num; $i++){
        
        if($input_Num % $i == 0){
            $cheack++;
            break;
        }
    }
    if($cheack == 0){
        echo "<h2>$input_Num is Prime Number</h2>";
    }else{
        echo "$input_Num is Not a Prime Number";

    }
}
?>