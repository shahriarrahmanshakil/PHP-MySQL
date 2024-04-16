<?php
$connectwithDB = mysqli_connect('localhost','root','','crud');
if(isset($_POST["btnsubmit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];

    $insertdata = "INSERT INTO information(Full_Name,Email)
                    VALUES ('$name','$email')";

    $query = mysqli_query($connectwithDB,$insertdata);

    if($query == true){
        echo "Succesfully Data Inserted";
        header('location:form.php');
    }else{
        echo "<span style='color:red;'>Error<span>";
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
    <form action="crud.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>
</body>
</html>