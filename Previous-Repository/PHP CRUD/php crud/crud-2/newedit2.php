<?php
    $connectwihDB = mysqli_connect('localhost','root','','crud');

    if($_GET['eid']){
        echo $_GET['eid'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset style="width:fit-content;">
            <legend>Registration Form</legend>
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname" size="30"><br><br>
            <label for="lname">Last Name</label><br>
            <input type="text" id="lname" name="lname" size="30"><br><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" size="30"><br><br>
            <input type="submit" name="btninsert" value="INSERT">
        </fieldset>
    </form>
</body>
</html>