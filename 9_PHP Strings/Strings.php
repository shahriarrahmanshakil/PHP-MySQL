<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h2>Strings</h2>
    <h5>A string is a sequence of characters</h5>
    <p>Strings in PHP are surrounded by either double quotation marks, or single quotation marks.</p>
    <hr>
    <?php
        echo "Hello World <br>"; #this is strings
        echo  'Hello Bangladesh<br>'; #another strings surrounded by single ('') quotation
        echo "<br>";

        // Double quoted string literals perform operations for special characters:
        $text = "I'm Strings";
        echo "Hello $text";

        echo "<br>";
        echo "<br>";
        echo "<br>";

        //Single quoted string literals returns the string as it is:
        $text2 = "I am another Strings";
        echo 'Hi! $text2'. "  ||# Single quoted string literals returns the string as it is";
    ?>
    <hr>
    <h3>String Length</h3>
    <?php
        $textdemo = "The PHP strlen() function returns the length of a string.";
        echo "$textdemo";
        echo '<br>';
        echo "String Length : ".strlen($textdemo);
        echo '<br>';
        echo '<br>';
        echo "$textdemo";
        echo '<br>';
        echo "String Word Count : ".str_word_count($textdemo);
    ?>  
    <hr>
    <h3>Search For Text Within a String</h3>
    <p>The PHP strpos() function searches for a specific text within a string.</p>
    <p>If a match is found, the function returns the character position of the first match.</p>
    <p> If no match is found, it will return FALSE.</p>
    <br><br><br>
    <?php
        echo "<p>The PHP strpos() function <u>searches</u> for a specific text within a string.</p>";
        $demotxt = "The PHP strpos() function searches for a specific text within a string.";
        echo "Search For Text Within a String : ".strpos("$demotxt","searches");
    ?>
     
</body>
</html>