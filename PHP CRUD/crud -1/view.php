<?php
$connectwithDB = mysqli_connect('localhost','root','','crud');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $datashow = "SELECT * FROM information";
        $query = mysqli_query($connectwithDB,$datashow);

        echo "<table>";
        echo "<tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>";
        while($queryshow = mysqli_fetch_assoc($query)){
        $fullName = $queryshow['Full_Name'];
        $email    = $queryshow['Email'];
        echo "<tr>
                <td>$fullName</td>
                <td> $email</td>
                <td>
                    <button style='background-color:green;'>
                    <a href=''>Edit</a>
                    </button> 
                    <button style='background-color:tomato;'>Delete</button>
                </td>
              <tr>";
        }
        echo "</table>";
    ?>
</body>
</html>