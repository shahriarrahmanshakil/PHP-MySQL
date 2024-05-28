<?php
    $connectwithdb = mysqli_connect('localhost','root','','learning_php_mysql');
    if($_GET['delete_id']){
        $delete_id = $_GET['delete_id'];
        $traineeinfo_delete = "DELETE FROM traineeinfo WHERE id=$delete_id";
        if(mysqli_query($connectwithdb,$traineeinfo_delete) == TRUE){
            header("location:traineeinfo_view.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trainneinfo view</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php
        $traineeinfo_select = "SELECT * FROM traineeinfo";
        $traineeinfo_query = mysqli_query($connectwithdb,$traineeinfo_select);
        
        echo "<table>";
        echo "<tr>
                <th>ID No</th>
                <th>Trainee ID</th>
                <th>Name</th>
                <th>Batch</th>
                <th>Round</th>
                <th>Action</th>
            </tr>";

        while($traineeinfo_array = mysqli_fetch_assoc($traineeinfo_query)){
            $id = $traineeinfo_array['id'];
            $traineeinfo = $traineeinfo_array['traineeid'];
            $name = $traineeinfo_array['name'];
            $batch = $traineeinfo_array['batch'];
            $round = $traineeinfo_array['round'];

            echo "<tr>
                    <td>$id</td>
                    <td>$traineeinfo</td>
                    <td>$name</td>
                    <td>$batch</td>
                    <td>$round</td>
                    <td>
                        <span> 
                            <a href='traineeinfo_edit.php?id=$id' target='blank'>
                                Edit
                            </a>
                        </span>

                        <span> 
                            <a href='traineeinfo_view.php?delete_id=$id'>
                                Delete
                            </a>
                        </span>
                    </td>
                </tr>";
        }
        echo "</table>";


    ?>
</body>
</html>