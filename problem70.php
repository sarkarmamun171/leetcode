<?php
function climbStairs($n) {
        if($n==0||$n==1){
            return 1;
        }
        return ($n-2)+($n-1);
    }

$n = 2;
echo climbStairs($n); 

?>