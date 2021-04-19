<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<header>
    <!--
    David Pavlenko
    4/15/21
    http://dpavlenko.greenriverdev.com/328/pp2/
    Pair Program 2
    -->
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    ?>
</header>
<body>
    <p>PHP Array Practice
        <?php
        include "functions.php";
        $numbers = array(7, 9, 8, 9, 8, 8, 6);

        printArr($numbers);
        largest($numbers);
        removeDups($numbers);
        ?>
    </p>
</body>
</html>