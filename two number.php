<?php
	function twoSum($nums,$target){
		$map = [];

		for ($i=0; $i < count($nums); $i++) { 
			$complement = $target-$nums[$i];
			if (isset($map[$complement])) {
				return [$map[$complement],$i];
			}
			$map[$nums[$i]] = $i;
		}

		//return null;
	}
   $nums = [3,2,4];
   $target = 6;
   $result = twoSum($nums, $target);

   if ($result!=null) {
   	echo "[".$result[0].",".$result[1]."]";
   }else{
   	echo "No solution found";
   }
?>