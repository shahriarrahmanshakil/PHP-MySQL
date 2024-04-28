<?php
    if(isset($_POST['btnsubmit'])){
    $fileName    = $_FILES['fileup']['name'];
    $filetype    = $_FILES['fileup']['type'];
    $tmpLocation = $_FILES['fileup']['tmp_name'];
    $filesize    = $_FILES['fileup']['size'];
    $upStore     = 'upstore/';

    if(!empty($fileName)){
        if($filetype == 'image/jpeg'){
            if($filesize < 90000){
                move_uploaded_file($tmpLocation,$upStore.$fileName);
                echo "Success";
            }else{
                echo "image should be less than 90000 bytes";
            }
       
        }else{
            echo "select an image in jpeg format";
        }
    }else{
        echo "select a file";
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
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="file">Select your file</label>
        <input type="file" name="fileup" id="file">
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>
</html>