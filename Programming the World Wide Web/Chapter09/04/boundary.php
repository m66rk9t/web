<?php
	function Boundary($arr, &$smaller, &$greater){
		$sindex = 0;$gindex = 0;
		foreach($arr as $val){
			if ($val < 0)
				$smaller[$sindex++] = $val;
			if ($val > 0)
				$greater[$gindex++] = $val;
		}
	
	}

	$myArr = array(-5, -4, -3, 0, 6, 7, 8);
	$sArr;$gArr;

	Boundary($myArr, $sArr, $gArr);
	
	foreach($sArr as $val1)
		echo "$val1";
	print "\n";
	foreach($gArr as $val2)
		echo "$val2";

?>
