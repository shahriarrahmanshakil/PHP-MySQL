<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling by $_GET Method Receive Data</title>
    <style>
        button{
            width: 200px;
        }

        button a{
            display: block;
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <h3>use GET Method Receive Data</h3>
    <br>
    <span>Name  :</span> <?php echo $_GET['name'].'<br>'; ?>
    <br>
    <span>Email :</span> <?php echo $_GET['email'].'<br>'; ?>
    <br><br>
    <button type="button">
        <a href="input_get.php">Back</a>
    </button>
</body>
</html>