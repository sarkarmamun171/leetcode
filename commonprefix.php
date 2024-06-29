<?php
 function longestCommonPrefix($strs){
	if (empty($strs)) {
		return "";
	}
	$prefix =$strs[0];
	$count = count($strs);

	// echo $count;

	for ($i=0; $i < $count; $i++) { 
		while (strpos($strs[$i], $prefix)!==0) {
			$prefix = substr($prefix, 0,-1);
			if ($prefix ==="") {
				return "";
			}
		}
	}
	return $prefix;
}
 $strs = ["flower", "flow", "flight"];
  echo longestCommonPrefix($strs);
?>