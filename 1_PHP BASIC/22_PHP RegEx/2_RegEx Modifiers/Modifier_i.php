<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Modifier: i</title>
</head>
<body>
    <h1>Regex Modifier: i</h1>
    <p>Performs a case-insensitive search</p>
    <?php
        $m_text = "Hello Bangladesh";
        $pattern = "/l/i";
        echo preg_match_all($pattern,$m_text);
    ?>
    <p><b>The matches were found here</b></p>
    <?php
        echo preg_replace($pattern,"*",$m_text)
    ?>
    <br><br><br>
    <hr>
    <small>Each match was replaced by * character</small>
    
</body>
</html>