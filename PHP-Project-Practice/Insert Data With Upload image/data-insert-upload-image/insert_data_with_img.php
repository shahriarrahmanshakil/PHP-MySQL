<?php
    $connectWithdb = mysqli_connect('localhost','root','','learning_php_mysql');

    if(isset($_POST['btnsubmit'])){
       $firstName   =  $_POST['fname'];
       $lastName    =  $_POST['lname'];
       $email       = $_POST['email'];

       $pictureName     = $_FILES['picture']['name'];
       $picture_tmpName = $_FILES['picture']['tmp_name'];
       $picture_upload  = 'Pictures/'.$pictureName;

        $data_insert ="INSERT INTO studentinfo(firstName,lastName,email,pictures)
                       VALUES('$firstName','$lastName','$email','$pictureName')";
        $data_insert_query = mysqli_query($connectWithdb,$data_insert);

        if($data_insert_query === TRUE){
            move_uploaded_file($picture_tmpName, $picture_upload);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data With Image</title>
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Student Information</legend>
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last Name</label><br>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="picture">Picture</label><br>
            <input type="file" id="picture" name="picture"><br><br><br>
            <input type="submit" value="Submit" name="btnsubmit">
        </fieldset>
    </form>
</body>
</html>
<br><br>
<?php
    $select_data = "SELECT * FROM studentinfo";
    $select_data_query = mysqli_query($connectWithdb,$select_data);

    echo "<table>";
    echo "<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Pictures</th>
        </tr>";

    while($select_data_query_array = mysqli_fetch_assoc($select_data_query)){

         $firstName = $select_data_query_array['firstName'];
         $lastName = $select_data_query_array['lastName'];
         $email = $select_data_query_array['email'];
         $pictures = $select_data_query_array['pictures'];
        
        
        echo "<tr>
                <td>$firstName</td>    
                <td>$lastName</td>    
                <td>$email</td>      
                <td>
                    <img src='Pictures/$pictures' alt='' width='100px' height=100px>
                </td>
            </tr>";

        };
        echo "</table>";


?>