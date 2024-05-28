<?php
    $connectwithdb = mysqli_connect('localhost','root','','learning_php_mysql');
    if(isset($_GET['edit_id'])){
        $get_id = $_GET['edit_id'];

        $get_data = "SELECT * FROM traineeinfo WHERE id = $get_id";
        $get_data_query = mysqli_query($connectwithdb,$get_data);
        $get_data_array = mysqli_fetch_assoc($get_data_query);

        $id = $get_data_array['id'];
        $traineeid = $get_data_array['traineeid'];
        $traineeName = $get_data_array['name'];
        $traineeBatch = $get_data_array['batch'];
        $traineeRound = $get_data_array['round'];

    }

    if(isset($_POST['btnedit'])){
        $id  = $_POST['id'];
        $t_id = $_POST['t_id'];
        $t_name = $_POST['name'];
        $t_batch = $_POST['batch'];
        $t_round = $_POST['round'];

        $traineeinfo_update =   "UPDATE traineeinfo 
                                SET traineeid='$t_id', name='$t_name', batch='$t_batch', round='$t_round'
                                WHERE id='$id'";

        $traineeinfo_update_query = mysqli_query($connectwithdb,$traineeinfo_update);

        if( $traineeinfo_update_query  == true){
            header("location:traineeinfo_view.php");
        }
        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traineeinfo_edit</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="t_id">Trainee ID</label><br>
        <input type="number" id="t_id" name="t_id" value="<?php echo $traineeid ?>"><br><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value="<?php echo $traineeName ?>"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch" value="<?php echo $traineeBatch ?>"><br><br>
        <label for="round">Round</label><br>
        <input type="number" id="round" name="round" value="<?php echo $traineeRound ?>"><br><br>
        <input type="text" name="id" value="<?php echo $id ?>">
        <input type="submit" name="btnedit" value="Edit">
    </form>
</body>
</html>