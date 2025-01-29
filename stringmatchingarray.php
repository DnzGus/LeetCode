<?php
function stringMatching($words) {
 $range = count($words);
 $subStr = [];
 usort($words, function ($a,$b){
  $aLength = strlen($a);
  $bLength = strlen($b);
   if ($aLength == $bLength) {
    return 0;
    }
    return ($aLength < $bLength) ? -1 : 1;
 });
 for($i = 0; $i < $range-1; $i++){
  for($j = $i+1; $j < $range; $j++){
   if (str_contains($words[$j], $words[$i])) {
    $subStr[$words[$i]] = $words[$i];
   }
  }
 }
 return $subStr;
 }

stringMatching(["mass","as","hero","superhero"]);