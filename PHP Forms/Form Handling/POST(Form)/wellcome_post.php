<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling by $_POST Method Receive Data</title>
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
    <h3>use POST Method Receive Data</h3>
    <br>
   <span>Name : </span> <?php echo $_POST['name'];?><br>
   <span>Email :</span> <?php echo $_POST['email'];?>
   <br><br>
   <button type="button">
        <a href="input_post.php">Back</a>
    </button>
</body>
</html>