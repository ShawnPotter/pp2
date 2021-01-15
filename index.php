<?php
  /*
   * Shawn Potter
   * 1/15/2021
   * index.php
   * Pair Program 2
   */

  //turn on error reporting
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  include("functions.php")
  ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    echo "<h2>PHP Array Practice</h2><br>";
    //an array of numbers
    $numbers = [7,9,8,9,8,8,6];
    echo "<div>";
    echo "<p>Line by line printout of the array:</p>";
    //print all the values in the numbers variable
    printArr($numbers);
    echo "</div>";

    echo "<div>";
    echo "<br>";
    echo "<p>Largest Number in the Array: </p>";
    echo largest($numbers);
    echo "</div>";

    echo "<div>";
    echo "<br>";
    echo "<p>Duplicates removed from the array: </p>";
    echo removeDups($numbers);
    echo "</div>";

    echo "<div>";
    echo "<br>";
    echo "<p>Turned Array into an Associative Array: </p>";
    echo distribution($numbers);
    echo "</div>";
  ?>
</body>
</html>
