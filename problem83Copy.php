<?php
function removeDulicates($arr,$n){
	if($n==0 ||$n==1){
		return $n;
		$temp = new Array($n);

		$j = 0;
		for ($i=0; $i <$n-1; $i++) { 
			if ($arr[$i]!=$arr[$i+1]) {
				$temp[$j++]= $arr[$i];
				$temp[$j++]= $arr[$n-1];

				for ($i=0; $i <$j; $i++) { 
					$arr[$i]= $temp[$i];
					return $j;
				}

			}
		}
	}
}

?>