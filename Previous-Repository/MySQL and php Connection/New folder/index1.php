<?php
#Object Oriented Connection format 
// $hostName = "localhost";
// $userName = "root";
// $password = "";

// $dataBaseName = "college";

// $connection = new mysqli($hostName,$userName,$password);

// if($connection->connect_error){
//     die("Connection failed.".$connection->connect_error);
// }
// echo "Object Oriented Connection formate Succesfull";

?>

<?php
#Procedural Connection formate
$hostName = "localhost";
$userName = "root";
$password = "";

$dataBaseName = "college";

$connection =mysqli_connect($hostName,$userName,$password,$dataBaseName);

if(!$connection){
    die("Connection failed.");
}
// echo "Connection Succesfull";
echo "Procedural Connection formate Succesfull";
?>