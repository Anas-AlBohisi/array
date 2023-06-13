<?php
  $names = array("ali" => 3, "omar" => 2, "khaled" => 1);
  $has_ali = array_key_exists("apple", $names);
  if ($has_ali) {
    echo "The array contains the key 'ali'\n";
  } else {
    echo "The array does not contain the key 'ali'\n";
  }
?>