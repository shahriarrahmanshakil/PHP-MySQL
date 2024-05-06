<?php
    $connectwihDB = mysqli_connect('localhost','root','','crud');
    if(isset($_GET['delete_id'])){
        $delete_id = $_GET['delete_id'];
        $deletequery = "DELETE FROM registration_form WHERE id = $delete_id";
        if(mysqli_query($connectwihDB,$deletequery) == TRUE){
            header('location:view2.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view-2</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .edit{
            background-color: green;
        }
        .delete{
            background-color: red;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $datashow = "SELECT * FROM registration_form";
        $dataquery = mysqli_query($connectwihDB,$datashow);
        
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
             </tr>";
        while($dataarray = mysqli_fetch_assoc($dataquery)){
        $id         = $dataarray['id'];
        $firstName  = $dataarray['First_Name'];
        $lastName   = $dataarray['Last_Name'];
        $email      = $dataarray['Email'];

        echo "<tr>
                <td>$id</td>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$email</td>
                <td>
                    <span class='edit'>
                        <a href='edit2.php ? edit_id=$id'> Edit </a>
                    </span>
                    <span class='delete'>
                        <a href='view2.php ?  delete_id=$id'> Delete </a>
                    </span>
                </td>
            </tr>";
    }   
    echo "</table>";
    ?>
</body>
</html>