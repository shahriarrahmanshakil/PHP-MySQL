<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Modifier: m</title>
</head>
<body>
    <h1>Regex Modifier: m</h1>
    <p>How many times does the phrase "you" occur at the beginning of a line in the text:</p>
    <pre>Avoid heat stroke amid heatwave:
        Avoid DGHS issues eight directives</pre>
    <?php
        $text = "Avoid heat stroke amid heatwave heat is DGHS\nAvoid issues eight directives";
        $pattern = "/^Avoid/m";
        echo preg_match_all($pattern, $text);
    ?>

    <p>The matches were found here:</p>
    <?php
        echo preg_replace($pattern,'*',$text);
    ?>

    <br><br>
    <p>Each match was replaced by a (*) character</p>

</body>
</html>