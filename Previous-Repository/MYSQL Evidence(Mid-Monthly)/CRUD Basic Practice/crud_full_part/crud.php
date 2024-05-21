<?php
    $connection = mysqli_connect('localhost','root','','company');

    if(isset($_POST["btnsubmit"])){
         $id      = $_POST['id'];
         $name    = $_POST['name'];
         $address = $_POST['address'];
         $contact = $_POST['contactno'];
    }

    $insertdata = "INSERT INTO manufacturer(id,name,address,contact_no)
                    VALUES ('$id','$name','$address','$contact')";

    $querydata  = mysqli_query($connection,$insertdata);

    if($querydata == true){
        echo "OKK";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_Read_Update_Delete</title>
</head>
<body>
    <form action="crud.php" method="POST">
        <label for="id">ID</label>
        <input type="text" id="id" name="id"><br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address"><br><br>
        <label for="contactno">Contact</label>
        <input type="number" id="contactno" name="contactno"><br><br>
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>