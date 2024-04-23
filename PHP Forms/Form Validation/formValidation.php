<?php
    if(isset($_POST['btnsubmit']))
    {
         $_POST['name'];
         $_POST['email'];
         $_POST['website'];
         $_POST['comment'];
         $_POST['gender'];
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" size="30"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" size="30"><br><br>
        <label for="website">Website</label><br>
        <input type="text" id="website" name="website" size="30"><br><br>
        <label for="comment">Comment</label><br>
        <textarea name="comment" id="comment" cols="30" rows="5" placeholder="comment here"></textarea><br><br>
        <label for="gender"> Gender : </label>
        <input type="radio" id="male" name="gender">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender">
        <label for="male">Female</label><br><br>
        <input style="width: 245px;;" type="submit" name="btnsubmit" value="submit">
    </form>
    
</body>
</html>