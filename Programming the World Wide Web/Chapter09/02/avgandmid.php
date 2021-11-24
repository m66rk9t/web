<?php
    function AvgAndMid($IntArray)
    {
        $set = array(0, 0);
        $total = 0;
        $count = 0;
        foreach ($IntArray as $val) {
            $total += $val;
            $count++;
        }
        $set[0] = (float)$total / $count;
        $set[1] = $IntArray[($count - 1) / 2];

        return $set;
    }

    $myArray = array(1, 2, 3, 4, 5);

    $retArray = AvgAndMid($myArray);

    echo "Original Array:";
    foreach ($myArray as $val) {
        echo "$val ";
    }

    echo ",Average:$retArray[0],Middle Value:$retArray[1]";
?>