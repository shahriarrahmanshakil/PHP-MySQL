<?php
if(isset($_POST['btnsubmit'])){

$fileName = $_FILES['fileName']['name'];
$tmp_location = $_FILES['fileName']['tmp_name'];

$my_storege = 'image/';

    if(!empty($fileName)){
        move_uploaded_file($tmp_location,$my_storege.$fileName);
    }else{
        echo "please select a new file";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="file1.php" method="post" enctype="multipart/form-data">
        <label for="slfile">Select a file</label>
        <input type="file" id="slfile" name="fileName">
        <input type="submit" value="Upload" name="btnsubmit">
    </form>
</body>
</html>