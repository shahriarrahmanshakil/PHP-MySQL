<?php
    $connectWithDB = new mysqli('localhost','root','','learning_php_mysql');
    if(isset($_POST['btnsubmit']))
    {
        $name        = $_POST['name'];
        $class       = $_POST['class'];
        $department  = $_POST['department'];
        $institute   = $_POST['institute'];

        $insertdata = "INSERT INTO student(name,class,department,institute)
                        VALUES('$name','$class','$department','$institute')";
        $insertdata_query = $connectWithDB->query($insertdata);
        if($insertdata_query === TRUE){
            echo "Data Insert";
            header("location:php-crud-oop-form.php");
        }   
    }
    $connectWithDB->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-crud-oop-form</title>
</head>
<body>
    <form action="#" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="class">Class</label><br>
        <input type="text" id="class" name="class"><br><br>
        <label for="department">Department</label><br>
        <input type="text" id="department" name="department"><br><br>
        <label for="institute">Institute</label><br>
        <input type="text" id="institute" name="institute"><br><br>
        <input type="submit" name="btnsubmit" value="submit">
    </form>
</body>
</html>