<?php

$allnum = array (2,3,7,8,9,1,13);
$x = [];
for ($i=0; $i < count($allnum) ; $i++) { 
  if($allnum [$i] % 2 != 0){

    $x[] = $allnum[$i];
}


}
var_dump ($x) ;



?>