<?php
function isPalindrome($x){
	if($x<0){
		return false;
	}
	$str = strval($x);
	$reveredStr = strrev($str);

	return $str === $reveredStr;
}
$x = 121;
if (isPalindrome($x)) {
	echo "true";
}else{
	echo "false";
}


// print_r($x);

?>
