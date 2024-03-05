<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"> <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['name'];
            if(empty($name)){
                echo "Name is Empty";
            }else{
                echo $name;
            }
        }
    ?>
</body>
</html>