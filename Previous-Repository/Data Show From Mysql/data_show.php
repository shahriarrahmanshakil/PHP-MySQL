<?php
 require('connection.php');
    
    $sqltable = "SELECT * FROM information";

    $query = mysqli_query($connection,$sqltable);

    if($query)
    {
        while($data = mysqli_fetch_array($query))
        {
            $Roll = $data['Roll'];
            $Name = $data['Name'];
            $Gender = $data['Gender'];
            $Age = $data['Age'];
            $GPA = $data['GPA'];
            $City = $data['City'];

            echo $Roll,$Name,$Gender,$Age,$GPA,$City;
            echo "<br>";
        }
    }    
?>