<?php
function removeDuplicates(&$nums) {
    $n = count($nums);
    if ($n == 0) return 0;

     $j = 0;
     for ($i=0; $i <$n ; $i++) { 
     	if ($nums[$i]!= $nums[$j]) {
     		$j++;
     		$nums[$j]= $nums[$i];
     	}
     }
     for ($i=$j+1; $i <$n ; $i++) { 
     	$nums[$i] = '_';
     }
     return $j+1;

   }
   $nums = [1, 1, 2];
   $length = removeDuplicates($nums);
   echo "Output: $length, nums = [" . implode(", ", $nums) . "]\n";
?>
