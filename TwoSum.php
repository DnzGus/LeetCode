<?php

function twoSum($nums, $target) {
 $arr = [];
 $len = count($nums);
 foreach($nums as $key => $val){
  $sub = $target - $val;
  if(isset($arr[$sub])){
   return [$arr[$sub], $key];
  }
  $arr[$val] = $key;
 }
}
