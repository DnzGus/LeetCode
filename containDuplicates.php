<?php

// $funcao = function ($array){
//   print_r($array);
//   $array2 = array_flip($array);
//   print_r($array2);
// };

// $funcao(['foo' => 'bar', '2' => '1']);

  // $array= [1,2,3,4];

  // $array2 = array_map(fn ($element) =>$element *$element, $array);

  // print_r($array2);


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
