<?php

function isVowel($letter){
    $vowels = [
    'a','e','i','o','u','A','E','I','O','U'
    ];
 if(in_array($letter,$vowels)){
  return true;
 }
 return false;
}
function halvesAreAlike($s) {
 $len = strlen($s);
 $sides = str_split($s, $len/2);
 $sidesLen = strlen($sides[0]);
 $lcounter = 0;
 $rcounter = 0;
 for($i = 0; $i < $sidesLen; $i++){
  if(isVowel($sides[0][$i])){
   $lcounter += 1;
  }
  if(isVowel($sides[1][$i])){
   $rcounter += 1;
  }
 }

 if($lcounter == $rcounter){
  return true;
 }

 return false;
}
