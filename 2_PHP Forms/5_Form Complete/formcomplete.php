<?php
    #Create variables and set to empty values
    $nameerror = $emailerror = $website_error  = $gendererror = "";
    $name = $email = $website = $comment = $gender = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
         if(empty($_POST['name'])){
            $nameerror = "Name is Required";
         }else{
            $name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
               $nameerror = "Only letters and white space allowed";
            }
         }

         if(empty($_POST['email'])){
            $emailerror = "Email is Required";
         }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailerror = "Invalid email format";
               $email = $_POST["email"];
            }
         }
        
         if(empty($_POST['website'])){
            $website = "";
         }else{
            $website = $_POST['website'];
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
               $website_error = "Invalid URL";
            }
           
         }

         if(empty($_POST['comment'])){
            $comment = "";
         }else{
            $comment = $_POST["comment"];
         }

         if(empty($_POST['gender'])){
            $gendererror = "Select you'r gender";
         }else{
            $gender = $_POST["gender"];
         }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="name">Name</label>
        <span style="color: red;">*</span><br>
        <input type="text" id="name" name="name" size="30">
        <span class ='error'><?php echo $nameerror; ?></span><br><br>

        <label for="email">Email</label>
        <span style="color: red;">*</span><br>
        <input type="email" id="email" name="email" size="30">
        <span class ='error'><?php echo $emailerror; ?></span><br><br>

        <label for="website">Website</label><br>
        <input type="text" id="website" name="website" size="30">
        <span class ='error'><?php echo $website_error; ?></span><br><br>     

        <label for="comment">Comment</label><br>
        <textarea name="comment" id="comment" cols="30" rows="5" placeholder="comment here"></textarea><br><br>

        <label for="gender">Gender :</label>
        <span style="color: red;">*</span>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="male">Female</label> &nbsp;&nbsp;&nbsp;&nbsp;
        <span class ='error'><?php echo $gendererror; ?></span><br><br>

        <input style="width: 245px;;" type="submit" name="btnsubmit" value="submit">
        
    </form>
    
</body>
</html>

<?php
    echo  $name.'<br>';
    echo  $email.'<br>'; 
    echo  $website.'<br>'; 
    echo  $comment.'<br>';  
    echo  $gender;
?>