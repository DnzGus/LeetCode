<?php
    
    
    function sortedSquares($nums) {
        $newArr = [];
        foreach($nums as $num){
            $newArr[] = $num * $num;
        }
        $len = count($newArr);
        for($i = 0; $i < $len; $i++){
            for($j = 0; $j < $len - $i - 1; $j++){
                if($newArr[$j+1] < $newArr[$j]){
                    $temp = $newArr[$j];
                    $newArr[$j] = $newArr[$j+1];
                    $newArr[$j+1] = $temp;
                }
            }
        }
        return $newArr;
    }
