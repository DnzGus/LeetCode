<?php

function searchInsert($nums, $target) {
 $low = 0;
 $high = count($nums);
 while($low < $high){
  $mid = floor(($low + $high) / 2);
  $val = $nums[$mid];
  if($val == $target){
   echo $mid;
   return $mid;
  }elseif($val > $target){
   $high = $mid;
  }else{
   $low = $mid + 1;
  }
 }
 echo $low;
 return $low;
}

searchInsert([1,3,5,6], 3);
