<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static Keyword</title>
</head>
<body>
    <h3>PHP The static keyword</h3>
    <article>
    Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job
    </article>
    <?php
        function mytest(){
            //it contained from the last time the function was called.
            static $a = 0;
            echo $a;
            $a++;
        }
        mytest();
        mytest();
        mytest();
        mytest();
        mytest();
    ?>
</body>
</html>