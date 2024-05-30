<?php
    require("functionPlayerinfo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Player Information</h1><br>

    <div class="container d-flex justify-content-center">
        <form action="playerinfo_view.php" method="post" enctype="multipart/form-data" class="w-50">

            <?php playerinfo("text","playerName","Enter Your Name","") ?>
            <?php playerinfo("number","jurseyNumber","Enter Your Jursey Number","") ?>
            <?php playerinfo("file","playerimg","","") ?>

            <button type="submit" name="btnsubmit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>
</html>
