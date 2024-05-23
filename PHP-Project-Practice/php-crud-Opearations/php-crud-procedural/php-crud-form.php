<?php
$connectdb = mysqli_connect("localhost","root","","wdpf");

    if(isset($_POST["btnsubmit"])){
       $name = $_POST['name'];
       $batch = $_POST['batch'];
       $round = $_POST['round'];
       $email = $_POST['email'];

       $sql_insert = "INSERT INTO student_info(name,batch,round,email)
                        VALUES ('$name','$batch','$round','$email')";
        $sql_query = mysqli_query($connectdb, $sql_insert);
        if($sql_query === true){
            echo "Data Inserted";
            header("location:php-crud-view.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
</head>
<body>
    <form action="#" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch"><br><br>
        <label for="round">Round</label><br>
        <input type="number" id="round" name="round"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>
</body>
</html>