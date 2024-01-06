<?php
  function containsDuplicate($nums) {
    $sortNums = sort($nums);
    $len = count($nums);

    for($i = 0, $j = 1; $j < $len; $i++, $j++){
      if($nums[$i] == $nums[$j]){
        return true;
      }
    }
    return false;
  }

  containsDuplicate([1,3,2,5,4,5]);
