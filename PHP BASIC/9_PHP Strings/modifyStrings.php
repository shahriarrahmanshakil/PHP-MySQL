<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Strings</title>
</head>
<body>
    <h1>PHP - Modify Strings</h1>
    <h3>PHP has a set of built-in functions that you can use to modify strings.</h3>
    <?php
        $text = "bangladesh";
        echo $text. ' ||  without Modify strings';
        echo "<br>";
        echo strtoupper($text).'|| with Modify strings';


        echo "<br>";echo "<br>";echo "<br>";
        $text1 = "PHP: HYPERTEXT PREPROCESSOR";
        echo "<br>";
        echo strtolower($text1);
    ?>
</body>
</html>