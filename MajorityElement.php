<?php

function majorityElement($nums) {
 $arr = [];
 $len = count($nums);
 foreach($nums as $num){
  $key = $num;
  if(array_key_exists($key, $arr)){
   $arr[$key] += 1;
  }
  else{
   $arr[$key] = 1;
  }
 }
 print_r($arr);
 echo "<br>";
 $biggest = null;
 $biggerValue = 0;
 foreach ($arr as $key => $value) {
  if($biggerValue <= $value){
   $biggest = $key;
   $biggerValue = $value;
  }
 }
 return $biggest; 
}

majorityElement([2,2,1,1,1,2,2]);