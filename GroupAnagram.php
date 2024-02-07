<?php

function groupAnagrams($strs) {
  $len = count($strs);
  $organizedArray = [];
  if($len <= 0){
    return $strs;
  }
  for($i = 0; $i < $len; $i++){
    $word = str_split($strs[$i]);
    sort($word);
    $sorted = implode($word);
    $organizedArray[$sorted][] = $strs[$i];
  }
  return $organizedArray;
}

    groupAnagrams(["eat","tea","tan","ate","nat","bat"]);
