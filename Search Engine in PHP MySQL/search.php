<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <br><br>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="search" name="search_text" placeholder="Search here">
        <input type="submit" name="btnsubmit" value="Search">
    </form>
    <br><br>
</body>
</html>

<?php
    require("db_connection.php");
    if(isset($_POST['search_text'])){
        $search_text = $_POST['search_text'];

        $search_sql = "SELECT * FROM student_information WHERE name LIKE '$search_text'";
        $search_query = mysqli_query($db_connection, $search_sql);
        
        if(mysqli_num_rows($search_query) > 0){
            echo "<table>";
            echo "<tr>
                <th>Trainee ID</th> 
                <th>Name</th> 
                <th>Batch</th> 
            </tr>";
            while($search_data = mysqli_fetch_assoc($search_query)){
                $trainee_id = $search_data['trainee_id'];
                $name = $search_data['name'];
                $batch = $search_data['batch'];

                echo "<tr>
                    <td>$trainee_id</td>
                    <td>$name</td>
                    <td>$batch</td>
                </tr>";
            }
            echo "</table>";
        } 
    }
?>

