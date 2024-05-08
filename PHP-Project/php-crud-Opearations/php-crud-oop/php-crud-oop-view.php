<?php
    $connectWithDB = new mysqli('localhost','root','','learning_php_mysql');

        $view_data = "SELECT institute FROM student";
        $view_data_query = $connectWithDB->query($view_data);

        if($view_data_query->num_rows > 0)
        {   
            echo "<table style = 'border:1px solid black'>";
            while($view_data_array = $view_data_query->fetch_assoc())
            {
                $id =  $view_data_array['id'];
                $name =  $view_data_array['name'];
                $class =  $view_data_array['class'];
                $department =  $view_data_array['department'];
                $institute =  $view_data_array['institute'];

                echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$class</td>
                        <td>$department</td>
                        <td>$institute</td>
                    </tr>";
            }
            echo "</table>";
        }

?>