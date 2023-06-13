<?php
  $cars = array("BME", "FIAT", "KIA");
  $has_fiat = in_array("FIAT", $cars);
  if ($has_fiat) {
    echo "The array contains fiat\n";
  } else {
    echo "The array does not contain fiat\n";
  }
?>