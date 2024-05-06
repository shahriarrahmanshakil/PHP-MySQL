<?php
    $connectwithDB = mysqli_connect('localhost','root','','newcrud');
    if(isset($_GET['id'])){
        $getid = $_GET['id'];

        $selectid = "SELECT * FROM studentinfo WHERE id = $getid";
        $editquery = mysqli_query($connectwithDB,$selectid);

        $editarray = mysqli_fetch_assoc($editquery);
            $id       = $editarray['id'];
            $fullname = $editarray['fullname'];
            $address  = $editarray['address'];
            $email    = $editarray['email'];
  
    }

    if(isset($_POST['btnedit'])){
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $updatequery = "UPDATE studentinfo 
                        SET fullname='$fullname',address='$address',email='$email'
                        WHERE id = '$id' ";
        if(mysqli_query($connectwithDB,$updatequery) == TRUE){
            echo 'Updated';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="fullname">Full Name</label><br>
        <input type="text" id="fullname" name="fullname" value="<?php echo $fullname ?>"><br><br>
        <label for="address">Address</label><br>
        <input type="text" id="address" name="address" value="<?php echo $address ?>"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email ?>"><br><br>
        <input type="text" name="id" value="<?php echo $id ?>" hidden>
        <input type="submit" name="btnedit" value="Edit">
    </form>
</body>
</html>