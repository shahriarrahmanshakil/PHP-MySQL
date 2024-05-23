<?php
$connectdb = mysqli_connect("localhost","root","","wdpf");
    
    if(isset($_GET['edit_id'])){
       $getid = $_GET['edit_id'];
        echo $getid;
    //    $sql_select = "SELECT * FROM student_info WHERE id = $getid";

    //    $sql_query = mysqli_query($connectdb, $sql_select);
    //    $sql_array = mysqli_fetch_assoc($sql_query);
    //            $id  = $sql_array['id'];
    //            $name  = $sql_array['name'];
    //            $batch  = $sql_array['batch'];
    //            $round  = $sql_array['round'];
    //            $email  = $sql_array['email'];
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
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name ?>"> <br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch" value="<?php echo $batch ?>"> <br><br>
        <label for="round">Round</label><br>
        <input type="number" id="round" name="round" value="<?php echo $round ?>"> <br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email ?>"> <br><br>
        <input type="submit" name="btnsubmit" value="Submit">
    </form>
</body>
</html>