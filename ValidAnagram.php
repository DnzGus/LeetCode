<?php

function isAnagram($s, $t) {
  $lenS = strlen($s);
  $lenT = strlen($t);
  if($lenS != $lenT){
    return false;
  }
  
  $sSplit = str_split($s);
  $tSplit = str_split($t);
  sort($sSplit);
  sort($tSplit);
    $diff = array_count_values($sSplit) != array_count_values($tSplit);
  if($diff){
    return false;
  }
  return true;
}
