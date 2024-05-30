<?php
    $connectwithdb = mysqli_connect('localhost','root','','learning_php_mysql');
    if(isset($_POST['btnsubmit'])){
        $fileName = $_FILES['uploadfile']['name'];
        $tmp_location = $_FILES['uploadfile']['tmp_name'];
        $fileUpload = 'My File/'.$fileName; 
        $file_type = $_FILES['uploadfile']['type'];
        $file_size = $_FILES['uploadfile']['size'];


        if($file_type !== "image/png"){
            if($file_size < 5000000){
                if(file_exists($fileUpload)){
                    echo "File Already Exists";
                }else{
                    if(move_uploaded_file($tmp_location,$fileUpload)){
                        $pictures_insert = "INSERT INTO pictures(pictures_name)
                                            VALUES('$fileName')";
                        if(mysqli_query($connectwithdb,$pictures_insert)){
                            echo "Data Inserted";
                        }
                    }
                }
              
            }else{
                echo "File Size Must be less than 5000000 Byte";
            }
        }else{
            echo "png file doesn't upload";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <style>
        table,td{
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="file">Select File</label>
        <input type="file" id="file" name="uploadfile"> 
        <input type="submit" name="btnsubmit" value="Upload">
    </form>
</body>
</html>

<?php
    $pictures_select = "SELECT * FROM pictures";
    $pictures_query = mysqli_query($connectwithdb,$pictures_select);
    
    echo "<table>";
    while($pictures_array = mysqli_fetch_assoc($pictures_query)){
        $my_pictures = $pictures_array['pictures_name'];

        echo "<tr>   
                <td><img src='My File/$my_pictures' width='300px' height='300px'> </td>
            </tr>";

    }
    echo "</table>";

?>