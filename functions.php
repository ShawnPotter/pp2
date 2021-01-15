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
  function distribution($arr){
    //get the number of duplicates to create values
    $vals = array_count_values($arr);

    //turn vals array into an array of just values
    $vals = array_values($vals);

    //get uniques from the array to create keys
    $keys = array_unique($arr);

    //turn keys array into an array of just values
    $keys = array_values($keys);

    //combine both arrays into an associative array
    $result = array_combine($keys, $vals);

    //sort the array by the key value
    ksort($result);

    //initate count
    $count = 0;

    //create output string
    $output = "[";

    //iterate through the array
    foreach($result as $i => $val){
      $count++; //increase count at the beginning of each loop
      if($count == count($result)){ //if the $count equals the length of the array change the concatenation
        $output .= $i."=>".$val."]";
      } else{
        $output .= $i."=>".$val.", ";
      }
    }
    //echo the output
    echo "<p>$output</p>";
  }

