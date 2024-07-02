<?php
function addBinary($a,$b){
	$sum ='';
	$carry = 0;
	$i =strlen($a)-1;
	$j= strlen($b)-1;

	while($i>=0||$j>=0||$carry){
		$bitA = $i>=0?$a[$i]-'0':0;
		$bitB = $j>=0?$a[$j]-'0':0;

		$total = $bitA+$bitB+$carry;
		$sum = ($total%2).$sum;
		$carry = intval($total/2);

		$i--;
		$j--;
	} 
	return $sum;
}
$a = "11";
$b = "1";
echo addBinary($a, $b);
?>