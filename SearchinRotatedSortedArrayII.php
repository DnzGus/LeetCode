<?php

function search($nums, $target) {
 $len = count($nums);
 $low = 0;
 for($i = 0; $i < $len; $i++){
  for($j = 0; $j < $len - $i - 1; $j++){
   if($nums[$j] > $nums[$j + 1]){
    $temp = $nums[$j+1];
    $nums[$j + 1] = $nums[$j];
    $nums[$j] = $temp;
   }
  }
 }
 while($low < $len){
  $mid = floor(($low + $len) / 2);
  $val = $nums[$mid];
  if($val == $target){
   echo "true";
   return true;
  }elseif($val < $target){
   $low = $mid + 1;
  }else{
   $len = $mid;
  }
 }
 echo "false";
 return false;
}

search([2,5,6,0,0,1,2], 9);
