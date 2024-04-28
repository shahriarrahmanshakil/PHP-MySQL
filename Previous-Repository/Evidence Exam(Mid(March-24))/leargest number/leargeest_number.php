<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest number among three numbers</title>
</head>
<body>

<?php
$a = $b = $c = $largest = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;
    $c = isset($_POST['c']) ? (float)$_POST['c'] : 0;

    if ($a > $b) {
        $largest = $a;
    } elseif ($b > $a) {
        $largest = $b;
    } else {
        $largest = $c;
    }
}

?>

<form method="post" action="#">

    <label for="a">Enter first number:</label>
    <input type="number" name="a" id="a" value="<?php echo $a; ?>" required><br><br>

    <label for="b">Enter second number:</label>
    <input type="number" name="b" id="b" value="<?php echo $b; ?>" required><br><br>

    <label for="c">Enter third number:</label>
    <input type="number" name="c" id="c" value="<?php echo $c; ?>" required><br><br>
    <br>

    <button type="submit">Find Largest</button>

</form>
<br>
<br>

<?php
if ($largest !== '') {
    echo "The largest number is: ". $largest;
}
?>
</body>
</html>