<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <label for="fileupload">Select image to upload</label>
        <input type="file" id="fileupload" name="fileupload">
        <input type="submit" value="Upload file" name="btnsubmit">
    </form>
</body>
</html>