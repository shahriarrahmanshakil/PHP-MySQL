<?php
$connectdb = mysqli_connect("localhost","root","","wdpf");

    if(isset($_GET['delete_id'])){
        $delete_id = $_GET['delete_id'];
        $sql_delete = "DELETE FROM student_info WHERE id =  $delete_id";
        if(mysqli_query($connectdb,$sql_delete) === TRUE){
            header("location:php-crud-view.php");
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud view</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;

        }
    </style>
</head>
<body>
    <?php
        $select_query = "SELECT * FROM student_info";
        $view_query = mysqli_query($connectdb,$select_query);
        
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Round</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>";
        
        while($view_array = mysqli_fetch_assoc($view_query)){
            
            $id     = $view_array["id"];
            $name   = $view_array["name"];
            $batch  = $view_array["batch"];
            $round  = $view_array["round"];
            $email  = $view_array["email"];

            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$batch</td>
                    <td>$round</td>   
                    <td>$email</td>  
                    <td>
                        <span>
                            <a href='php-crud-edit.php ? edit_id = $id'>Edit</a>
                        </span>
                        
                        <span>
                            <a href='php-crud-view.php? delete_id = $id'>Delete</a>
                        </span>
                    </td>  
                </tr>";
        }
     
    ?>
</body>
</html>