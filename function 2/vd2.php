<?php
function countOccurences($arr,$num){
    $count = 0;
    foreach ($arr as $item){
        if($item == $num){
            $count++;
        }
    }
    return $count;
}

$array = [2,4,6,8,10,2];
echo countOccurences($array,2);
