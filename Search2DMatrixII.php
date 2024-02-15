<?php

function searchMatrix($matrix, $target) {
 $rLen = count($matrix);
 $cLen = count($matrix[0]);
 for($i = 0; $i < $rLen; $i++){
  $high = $cLen;
  $low = 0;
  while($low < $high){
   $mid = floor(($low + $high)/2);
   $val = $matrix[$i][$mid];
   if($val == $target){
    return true;
   }elseif($val < $target){
    $low = $mid + 1;
   }else{
    $high = $mid;
   }
  }
 }
 return false;
}
