<?php
function rondomToInt($s){
	$rondom = [
		'I'=>1,
		'V'=>5,
		'X'=>10,
		'L'=>50,
		'C'=>100,
		'D' => 500,
        'M' => 1000,
	];
	$result = 0;
	$length = strlen($s);
	for ($i=0; $i <$length ; $i++) { 
		if ($i<$length-1 && $rondom[$s[$i]] < $rondom[$s[$i+1]]) {
			$result -= $rondom[$s[$i]];
		}else{
			$result +=$rondom[$s[$i]];
		}
	}
	return $result;
}
 echo rondomToInt('MXL');
?>