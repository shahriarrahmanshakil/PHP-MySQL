<?php
$connectwithDB = mysqli_connect('localhost','root','','crud');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <?php
        $datashow = "SELECT * FROM information";
        $query = mysqli_query($connectwithDB,$datashow);

        echo "<table style='border:1px solid black'>";
        echo "<tr>
                <th>Full Name<th>
                <th>Email</th>
              </tr>";
        while($queryshow = mysqli_fetch_assoc($query)){
        $fullName = $queryshow['Full_Name'];
        $email    = $queryshow['Email'];
        echo "<tr>
                <td>$fullName</td>
                <td> $email</td>
              <tr>";
        }
    ?>
</body>
</html>