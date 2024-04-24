<?php
require_once ("class1.php")

if(isset($_POST["btnsub"])){
   $ID = $_POST["IDNO"];
   $Name = $_POST["name"];
   $Course = $_POST["Course"];
   $Phone = $_POST["Phone"];

   $newObj1 = new studentinfo1($ID,$Name,$Course,$Phone);
   $newObj1->save();
   echo "Success";

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