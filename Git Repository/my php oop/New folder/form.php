<?php
require_once ("class.php");

if(isset($_POST["btnsub"])){
    $ID     = $_POST["id"];    
    $Name   = $_POST["name"];   
    $Course = $_POST["course"];   
    $Phone  = $_POST["phone"];
    
    if(preg_match("/^[0-9+]{11,14}$/",$Phone)){
        $NewObj = new studentinfo($ID,$Name,$Course,$Phone);
        $NewObj->save();
        echo "Success!";
    }else{
        echo "Invalid Phone";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset style="width: fit-content;">
            <legend>Student Information</legend>
        <label for="id">ID NO :</label>
        <input type="number" id="id" name="id"><br><br>
        <label for="name">Name :</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="course">Course :</label>
        <input type="text" id="course" name="course"><br><br>
        <label for="phone">Phone :</label>
        <input type="number" id="phone" name="phone"><br><br>
        <input type="submit" value="Submit" name="btnsub">
        </fieldset>
    </form>

    <?php
    
    studentinfo::display_studentinfo();
    
    ?>
</body>
</html>