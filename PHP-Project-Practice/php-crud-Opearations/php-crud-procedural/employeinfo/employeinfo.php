<?php
$connectWithDB = mysqli_connect('localhost','root','','learning_php_mysql');

    if(isset($_POST['btnsubmit'])){
       $name    = $_POST['name'];
       $email   = $_POST['email'];
       $address = $_POST['add'];

       $dataInsert = "INSERT INTO employeinfo(name,email,address)
                        VALUES('$name','$email','$address')";
       
       if($dataQuery = mysqli_query($connectWithDB, $dataInsert) == TRUE){
            echo "Data Inserted";
            // header("location :employeinfo.php");
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe Information</title>
</head>
<body>
    <h1>Employe Information</h1>
    <form action="#" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="add">Address</label>
        <input type="text" id="add" name="add"><br><br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>
</body>
</html>