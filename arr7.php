<?php
  $cars = array("BMW" => "red", "FIAT" => "yellow", "KIA" => "red");
  $car_keys = array_keys($cars);
  print_r($car_keys);
  
  $red_cars = array_keys($cars, "red");
  print_r($red_cars);
?>