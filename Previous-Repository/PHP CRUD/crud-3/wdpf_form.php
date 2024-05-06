<?php
    $connectwithDB = mysqli_connect('localhost','root','','student_information');
    if(isset($_POST['btninsert'])){
        $tid    = $_POST['traineeid'];
        $stname = $_POST['stname'];
        $batch  = $_POST['batch'];
        $email  = $_POST['email'];

    $datainsert = "INSERT INTO wdpf(id,student_name,Batch,Email)
                    VALUES($tid,'$stname','$batch','$email')";

    $query = mysqli_query($connectwithDB,$datainsert);

    if($query == true){
        header("location:wdpf_form.php");
    }

    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wdpf_form</title>
</head>
<body>
    <form action="wdpf_form.php" method="post">
        <label for="tid">Trainee ID</label><br>
        <input type="number" id="tid" name="traineeid"><br><br>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="stname"><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch"><br><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" name="btninsert" value="INSERT">
    </form>
</body>
</html>