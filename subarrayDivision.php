<?php

function countWaysToShareChocolate($chocolateBar, $birthMonth, $birthDay) {
    $count = 0;
    $n = count($chocolateBar);
    
    // Iterate through the chocolate bar to find segments of length birthMonth
    for ($i = 0; $i <= $n - $birthMonth; $i++) {
        $sum = 0;
        
        // Calculate the sum of the segment
        for ($j = $i; $j < $i + $birthMonth; $j++) {
            $sum += $chocolateBar[$j];
        }
        
        // Check if the sum matches the birthDay
        if ($sum == $birthDay) {
            $count++;
        }
    }
    
    return $count;
}

// Example usage:
$chocolateBar = [1, 2, 1, 3, 2]; // Example chocolate bar with integers
$birthMonth = 2; // Ron's birth month
$birthDay = 3; // Ron's birth day

echo countWaysToShareChocolate($chocolateBar, $birthMonth, $birthDay); // Output: 2
?>
