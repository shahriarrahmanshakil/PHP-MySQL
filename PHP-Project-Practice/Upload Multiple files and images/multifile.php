<?php
    if(isset($_POST['btnsubmit'])){
        
        $totalFile = count($_FILES['file']['name']);
        for($i = 0; $i < $totalFile; $i++){
            $fileName = $_FILES['file']['name'][$i];
            $tmpName = $_FILES['file']['tmp_name'][$i];
            $uploadImage = "images/".$fileName;
            if(move_uploaded_file($tmpName,$uploadImage)){
                echo "File Uploaded";
            }

        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="file">Select File</label>
        <input type="file" id="file" name="file[]" multiple><br><br>
        <input type="submit" name="btnsubmit" value="Upload">
    </form>
</body>
</html>