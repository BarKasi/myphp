<?php

$start = microtime(true);
define("max_Limit", 100);



function prime($n){
$lst = array();
$numbers = 2;
$x = true;
$sum = 0;
while (count($lst) < $n) {
for($i = 2;$i < $numbers;$i++){
         if($numbers % $i == 0){ 
            $x = false;
            break;
     }
    }
        if($x){
      array_push($lst, $numbers);  
  }
  $x = true;
  $numbers++;
 }
for ($j=0; $j < sizeof($lst); $j++) { 
	$sum += $lst[$j];
}
echo "sum simple numbers"," ","$sum " . PHP_EOL;
}

prime(max_Limit);
$time = microtime(true) - $start;
printf('The script was running  %.4F seconds .', $time);
