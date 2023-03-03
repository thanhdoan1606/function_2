<?php
function findSecondMax($arr)
{
    $max = $arr[0];
    $secondmax = $arr[1];

    foreach ($arr as $val) {
        if ($val > $max) {
            $secondmax = $max;
            $max = $val;
        } else if ($val > $secondmax && $val != $max) {
            $secondmax = $val;
        }
    }
    return $secondmax;
}
$array = [2, 4, 6, 8, 10];
echo findSecondMax($array);
