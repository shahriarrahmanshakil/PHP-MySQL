<?php
    if(isset($_POST['btnsubmit'])){
        $fileName = $_FILES['uploadfile']['name'];
        $tmp_location = $_FILES['uploadfile']['tmp_name'];

        $fileUpload = 'My File/'.$fileName; 

        if(move_uploaded_file($tmp_location,$fileUpload)){
            echo "File Uploaded";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="file">Select File</label>
        <input type="file" id="file" name="uploadfile"> 
        <input type="submit" name="btnsubmit" value="Upload">
    </form>
</body>
</html>