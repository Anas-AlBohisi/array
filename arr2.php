<?php

//$strs = [
 //   'mohammed',
   // 'mahmoud',
    //'abed alkhalek',
    //'yaqoub',
//];
//$y = '';
//foreach ($strs as $strs ) {
  //  if (strlen($strs) < strlen ($y)) {
        # code...
    //}
    # code...
//}
//echo $y;

$strings =[
    'anas',
    'sami',
    'bohisi',
    'mahmoud',
];
$x = '';
foreach ($strings as $string ) {
 if (strlen ($string) > strlen ($x)){ 
    $x = $string;
 }
}
    

echo $x;









?>