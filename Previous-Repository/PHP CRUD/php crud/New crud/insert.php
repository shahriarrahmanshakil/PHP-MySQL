<?php
    $connectwithDB = mysqli_connect('localhost','root','','newcrud');
    
    if(isset($_POST['btnsubmit'])){
        $fullname = $_POST['fullname'];
        $address  = $_POST['address'];
        $email    = $_POST['email'];

        $datainsert = "INSERT INTO studentinfo(fullname,address,email)
                            VALUES('$fullname','$address','$email')";
        
        if(mysqli_query($connectwithDB,$datainsert)){
            header('location:insert.php');
        }               
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="fullname">Full Name</label><br>
        <input type="text" id="fullname" name="fullname"><br><br>
        <label for="address">Address</label><br>
        <input type="text" id="address" name="address"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" name="btnsubmit" value="INSERT">
    </form>
</body>
</html>