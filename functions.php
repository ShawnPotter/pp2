<?php
  // function to print out all the values within an array
  function printArr($arr){

    foreach($arr as $value){
      echo "<p>$value<p>";
    }

  }

  // function that takes an array as a parameter and
  // returns the largest value in the array
  function largest($arr){
    sort($arr);
    $largest = array_pop($arr);
    echo "<p>$largest</p>";
  }

  //function that removes duplicate numbers form the array
  function removeDups($arr){
    $newArray = array_unique($arr);
    printArr($newArray);

  }

