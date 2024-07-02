<?php
function mySqrt($x){
	if ($x==0||$x==1) {
		return $x;
	}
	$i =1;
	$result =1;
	while($result<=$x){
		$i++;
		$result = $i*$i;
	}
	return $i-1;
}
$x = 4;
echo mySqrt($x); // Output: 2
?>