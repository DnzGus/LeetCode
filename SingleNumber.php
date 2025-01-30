<?php

function singleNumber($nums) {
 $len = count($nums);
 $dups = [];
 $unique = '';
 foreach($nums as $num){
  $key = $num;
  if(array_key_exists($key,$dups)){
   $dups[$key] = 'dups';
  }else{
   $dups[$key] = 1;
  }
 }
 return array_search(1,$dups);
}
singleNumber([2,2,1,3,3,5,1,5,9,6,6]);