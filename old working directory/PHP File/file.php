<?php
if(isset($_POST['btnsubmit'])){


$filename = $_FILES["fileName"]["name"];
$tmpfilename =  $_FILES["fileName"]["tmp_name"];
$store_img = "image/";

if(!empty($filename)){
    move_uploaded_file($tmpfilename,$store_img.$filename);
}else{
    echo "Please Select a file";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Upload</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
        Select you'r file
        <input type="file" id="fileName" name="fileName">
        <input type="submit" value="Upload" name="btnsubmit">
    </form>
</body>
</html>