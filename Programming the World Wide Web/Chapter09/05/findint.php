<?php
	function FindInt($intStr){
		if (preg_match("/\d{4}\s/", $intStr)){
			$strs = explode(" ", $intStr);
			foreach($strs as $str){
				if (strlen($str) == 4){
					settype($str, "integer");
					return $str;
				}
			}	
		}
		else
			return FALSE;
	}

	$myStr = "123 1234 123";
	
	$result;
	if ($result = FindInt($myStr))
		echo "$result";
	else
		echo "Not Find!";
?>
