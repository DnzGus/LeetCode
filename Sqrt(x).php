<?php

function mySqrt($x) {
 $lo = 0;
 $hi = $x;
 $sum = 0;
 while($lo <= $hi){
  $mid = floor(($lo + $hi) /2);
  if($mid * $mid == $x){
   return $mid;
  }elseif($mid * $mid < $x){
   $lo = $mid + 1;
   $sum = $mid;
  }else{
   $hi = $mid - 1;
  }
 }
 return $sum;
}
