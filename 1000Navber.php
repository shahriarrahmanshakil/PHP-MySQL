<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1000 Navbars</title>
    <style>
        /* Simple styles for the navbars */
        .navbar {
            background-color: #333;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<?php
    // Loop to generate 1000 navbars
    for ($i = 1; $i <= 1000; $i++) {
        echo '<div class="navbar">';
        echo '<a href="#home">Home</a>';
        echo '<a href="#about">About</a>';
        echo '<a href="#services">Services</a>';
        echo '<a href="#contact">Contact</a>';
        echo '</div>';
    }
?>

</body>
</html>
