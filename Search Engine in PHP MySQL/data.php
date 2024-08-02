<?php
    require("db_connection.php");
    if(isset($_POST['btnsubmit'])){
        $trainee_id = $_POST['t_id'];
        $trainee_name = $_POST['name'];
        $trainee_batch = $_POST['batch'];

        $sql = "INSERT INTO student_information (trainee_id,name,batch)
                VALUES('$trainee_id','$trainee_name','$trainee_batch')";
        $query = $db_connection->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <style>
        fieldset{
            width: 300px;;
        }
    </style>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <legend>Student Information</legend>
        <label for="t_id">Trainee ID</label><br>
        <input type="text" id="t_id" name="t_id"><br><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch"><br><br>
        <input type="submit" name="btnsubmit" value="Submit">
        </fieldset>
    </form>
</body>
</html>