<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
    <label for="name">Name</label>
    <input type="text" id = "name" name ="name">
    <input type="submit" value = "Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    if(empty($name)){
        echo "Name is Empty";
    }else{
        echo $name;
    }
}
?>
















<?php











?>