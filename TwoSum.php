<?php

function twoSum($nums, $target) {
  $len = count($nums);

  for($i = 0; $i < $len; $i++){
    for($j = 1; $j < $len; $j++){
      if($i == $j){
        continue;
      }
      $sum = $nums[$i] + $nums[$j];
      if($sum == $target){
        $arr = [$i,$j];
        return $arr;
    }
    }
  }
}
