<?php
    require_once ("class1.php");
    
    if(isset($_POST["btnsub"])){
        $ID = $_POST["id"];
        $name=$_POST["name"];

        $EmployE = new employe($ID,$name);
        $EmployE->save();

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <fieldset style="width: fit-content;">
            <label for="id">ID</label>
            <input type="number" id="id" name="id"><br><br>
            <label for="name">Name</label>
            <input type="text" id="name" name="name"><br><br>
            <input type="submit" value="Submit" name="btnsub">
        </fieldset>
    </form>

    <?php

    employe::einfo_display();

    ?>
</body>
</html>