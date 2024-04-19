<?php
    $connectwithDB = mysqli_connect('localhost','root','','newcrud');
    if(isset($_GET['d_id'])){
        $delete_id = $_GET['d_id'];

        $deleteid ="DELETE FROM studentinfo WHERE id = $delete_id";
        if(mysqli_query($connectwithDB,$deleteid) == TRUE){
            header('location:view.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $dataselect = "SELECT * FROM studentinfo";
        $dataquery = mysqli_query($connectwithDB,$dataselect);
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </tr>";
        while($dataarray = mysqli_fetch_assoc($dataquery)){
                $id        = $dataarray['id'];
                $fullname  = $dataarray['fullname'];
                $address   = $dataarray['address'];
                $email     = $dataarray['email'];
           
            echo "<tr>
                    <td>$id</td>
                    <td>$fullname</td>
                    <td>$address</td>
                    <td>$email</td>
                    <td>
                        <span>
                            <a href='edit.php?id=$id'>Edit</a>
                        </span>

                        <span>
                            <a href='view.php?d_id=$id'>Delete</a>
                        </span>
                    </td>
                </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>