<?php
function plusOne($digits) {
   $digits = array_reverse($digits);
        foreach($digits as $key=>$digit)
            if ($digit == 9){
                $digits[$key] = 0;
            }else{
                $digits[$key]++;
                return array_reverse($digits);
            }
        array_push($digits,1);
        return array_reverse($digits);
}
// Example usage:
$digits = [1, 2, 3];
print_r(plusOne($digits));
?>