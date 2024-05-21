<?php
$databaseName = new mysqli('localhost','root','','company');

    #Manufacturer Table
    if(isset($_POST['btnsubmit'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $databaseName->query("call manufacturer_demo('$name','$contact')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Procedure</title>
</head>
<body>
    <h3>Manufacturer Table</h3>
    <!-- Create Manufacturer Table -->
    <form action="#" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="contact">Contact</label>
        <input type="number" id="contact" name="contact"><br><br>
        <input type="submit" value="Submit" name="btnsubmit">
    </form>
    <br><br>

    <!-- Create Product Table -->
    <h3>Product Table</h3>
    <form action="#" method="post">
        <label for="pname">Product Name</label>
        <input type="text" id="pname" name="pname"><br><br>
        <label for="price">Price</label>
        <input type="number" id="price" name="price"><br><br>
        <label for="mname">Manufacturer Name</label>
        <select name="mname" id="mname">
            <?php
            
            ?>
        </select>
        <br><br>
        <input type="submit" value="Submit" name="pbtnsubmit">
    </form>

</body>
</html>