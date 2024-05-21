<?php
$connectwithdb = new mysqli('localhost','root','','company');

    if(isset($_POST['manufacturerbtn'])){
        $mfname   = $_POST['mfname'];
        $address  = $_POST['address'];
        $mcontact = $_POST['contact'];
        $connectwithdb->query("call manufacturer_demo('$mfname','$address','$mcontact')");
    }

    if(isset($_POST['productbtn'])){
        $productname      = $_POST['productname'];
        $price            = $_POST['price'];
        $manufacturername = $_POST['manufacturername'];
        $connectwithdb->query("call product_demo('$productname','$price',' $manufacturername')");
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store procedure</title>
</head>
<body>
    <main style="display:flex; justify-content:space-around;">
        <section>
                <h2>Manufacturer Table</h2>
                <form action="#" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="mfname"><br><br>
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address"><br><br>
                    <label for="contact">Contact</label>
                    <input type="number" id="contact" name="contact"><br><br>
                    <input type="submit" value="Submit" name="manufacturerbtn">
                </form>
      
                <h2>Product Table</h2>
                <form action="#" method="post">
                    <label for="pdname">Name</label>
                    <input type="text" id="pdname" name="productname"><br><br>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price"><br><br>
                    <label for="mfname">Manufacturer Name</label>
                    <select name="manufacturername">
                        <?php
                            $datastore = $connectwithdb->query("SELECT * FROM manufacturer");
                            while(list($data,$data2) = $datastore->fetch_row()){
                                echo "<option value='$data' >$data2 </option>";
                            }
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" value="Submit" name="productbtn">
                </form>
                
                <br><br>
<!-- 
                <form action="#" method="post">
                    <label for="manufacturer">Manufacturer</label>
                    <select name="deletmanufacturer">
                        <?php
                        
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" value="Delete" name="deletemanufacturer">
                </form>  -->
        </section>

        <section>
                <h2>View Product</h2>
            <table border="1" style="border-collapse: collapse;" > 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Manufacturer</th>
                    <th>Contact</th>
                </tr>
                    <?php 
                        $product = $connectwithdb->query("SELECT * FROM view_product");
                        while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
                            echo "<tr> 
                                    <td>$_id</td>
                                    <td>$_name</td>
                                    <td>$_price</td>
                                    <td>$_mname</td>
                                    <td>$_mcont</td>
                                </tr>";
                        }
                    
                    ?>
            </table>

        </section>
    </main>
</body>
</html>