<?php
require_once ("class1.php")

if($_POST(["btnsub"])){

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Student Information</legend>

            <label for="IDNO">ID NO</label>
            <input type="number" id="IDNO" name="IDNO"><br><br>
            <label for="name">Name</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="Course">Course</label>
            <input type="text" id="Course" name="Course"><br><br>
            <label for="Phone">Phone</label>
            <input type="nbumber" id="Phone" name="Phone"><br><br>
            <input type="submit" value="Submit" name="btnsub">
        </fieldset>
    </form>
</body>
</html>