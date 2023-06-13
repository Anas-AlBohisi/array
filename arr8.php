<?php
  function square($n) {
    return $n * $n;
  }
  
  $numbers = array(1, 2, 3, 4, 5,6,7,8);
  $squares = array_map("square", $numbers);
  print_r($squares);
?>