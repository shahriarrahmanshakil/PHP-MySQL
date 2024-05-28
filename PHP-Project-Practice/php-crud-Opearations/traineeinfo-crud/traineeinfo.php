<?php
    $connectwithdb = mysqli_connect('localhost','root','','learning_php_mysql');

    if(isset($_POST['btnsubmit'])){
        $traineeid = $_POST['t_id'];
        $name      = $_POST['name'];
        $batch     = $_POST['batch'];
        $round     = $_POST['round'];

        $insertinfo = "INSERT INTO traineeinfo(traineeid,name,batch,round)
                        VALUES('$traineeid',' $name','$batch','$round')";

        if(mysqli_query($connectwithdb,$insertinfo) === TRUE){
            echo "Data Inserted";
            header("location:traineeinfo.php");
        }else{
            echo "Data is Not Inserted";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traineeinfo</title>
</head>
<body>
    <form action="traineeinfo.php" method="post">
        <label for="t_id">Trainee ID</label><br>
        <input type="number" id="t_id" name="t_id"><br><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch"><br><br>
        <label for="round">Round</label><br>
        <input type="number" id="round" name="round"><br><br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>
</body>
</html>