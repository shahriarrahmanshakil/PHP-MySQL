<?php
    include("./connectwithdb.php");
      
    if(isset($_POST['btnsubmit'])){
        $playerName =$_POST['playerName'];
        $jurseyNumber = $_POST['jurseyNumber'];
        $images = $_FILES['playerimg'];
        echo $playerName;
        echo "<br>";
        echo $jurseyNumber;
        echo "<br>";
        print_r($images);

        echo "<br>";

        print_r($imagesname = $images['name']);
        echo "<br>";
        echo $imagesfull_path = $images['full_path'];
        echo "<br>";
        echo $imagestype = $images['type'];
        echo "<br>";
        echo $imagestmp_name = $images['tmp_name'];
        echo "<br>";
        echo $imageserror = $images['error'];
        echo "<br>";
        echo $imagessize = $images['size'];
        echo "<br>";
        $filename_separate = explode('.',$imagesname);
        print_r($filename_separate);
        echo "<br>";
        // $file_extention = strtolower($filename_separate[1]);
        // print_r($file_extention);
        $file_extention = strtolower(end($filename_separate));
        print_r($file_extention);
        echo "<br>";
        $extention = array('jpeg','jpg','png');
        if(in_array($file_extention,$extention)){
            $upload_image = "player img/".$imagesname; 
            move_uploaded_file($imagestmp_name,$upload_image);

            $insertdata = "INSERT INTO `player_information`(player_name,jursey_number,images)
                            VALUES ('$playerName','$jurseyNumber','$upload_image')";
            $insertdata_query = mysqli_query($connectwithdb,$insertdata);

        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player information View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Player Information View</h1>
</body>
</html>