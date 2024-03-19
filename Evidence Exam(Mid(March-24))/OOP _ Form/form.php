<?php
require_once ("class.php");

if(isset($_POST["btnsub"])){
    $ID     = $_POST["id"];    
    $Name   = $_POST["name"];   
    $Batch = $_POST["Batch"];   
    
    
      $NewObj = new studentinfo($ID,$Name,$Batch);
      $NewObj->save();
    
    
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
        <label for="Batch">Batch:</label>
        <input type="text" id="Batch" name="Batch"><br><br>
        <input type="submit" value="Submit" name="btnsub">
        </fieldset>
    </form>

    <?php
    
    studentinfo::display_studentinfo();
    
    ?>
</body>
</html>