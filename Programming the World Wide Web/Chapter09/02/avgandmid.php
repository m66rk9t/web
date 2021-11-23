<?php
	function AvgAndMid($IntArray){
		$set = array(0, 0);
		$total = 0;$count = 0;
		foreach($IntArray as $val){
			$total += $val;
			$count++;
		}
		$set[0] = (double)$total / $count;
		$set[1] = $IntArray[($count - 1) / 2];

		return $set;
	}

	$myArray = array(1, 2, 3, 4, 5);
	
	$retArray = AvgAndMid($myArray);

	echo "Original Array:";
	foreach($myArray as $val){
		echo "$val ";
	}
	
	echo "\nAverage:$retArray[0]\nMiddle Value:$retArray[1]";
?>
