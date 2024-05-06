<?php
    $connectwihDB = mysqli_connect('localhost','root','','crud');

    if($_GET['edit_id']){
        $getid = $_GET['edit_id'];
        $editquery = "SELECT * FROM registration_form WHERE id = $getid";
        $editsql = mysqli_query($connectwihDB,$editquery);
        $editarray = mysqli_fetch_assoc($editsql);

        $id        = $editarray['id'];
        $firstName = $editarray['First_Name'];
        $lastName  = $editarray['Last_Name'];
        $email     = $editarray['Email'];

        if(isset($_POST['btnedit'])){
            $id        = $_POST['id'];
            $firstName = $_POST['First_Name'];
            $lastName  = $_POST['Last_Name'];
            $email     = $_POST['Email'];

            $updatequery = "UPDATE registration_form 
                            SET First_Name=' $firstName',Last_Name='$lastName',Email='$email'
                            WHERE id ='$id'";
            if(mysqli_query($connectwihDB,$updatequery)==TRUE){
                header('location:view2.php');
                echo "Data Updated Successful";
            }                
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-2</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset style="width:fit-content;">
            <legend>Registration Form</legend>
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname" value="<?php echo $firstName?>" size="30"><br><br>
            <label for="lname">Last Name</label><br>
            <input type="text" id="lname" name="lname" value="<?php echo $lastName?>" size="30"><br><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" value="<?php echo $email?>" size="30"><br><br>
            <input type="submit" name="btnedit" value="Edit">
        </fieldset>
    </form>
</body>
</html>