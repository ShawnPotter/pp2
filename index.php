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

    $numbers = [7,9,8,9,8,8,6];
    function printArr($arr){
      foreach($arr as $value){
        echo "<p>$value<p>";
      }
    }
    printArr($numbers);
  ?>
</body>
</html>
