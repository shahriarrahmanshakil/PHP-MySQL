<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Open,Read,Close</title>
</head>
<body>
    <?php
    $myfile = fopen('open_read_close.txt','r') or die('Unable to Open');
    // echo fread($myfile,filesize('open_read_close.txt'));
    echo fgets($myfile);
    fclose($myfile);
    ?>
</body>
</html>