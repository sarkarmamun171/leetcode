<?php
function printStaircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print leading spaces
        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }
        // Print hashes
        for ($k = 0; $k < $i; $k++) {
            echo "#";
        }
        // Move to the next line
        echo "\n";
    }
}

// Example usage
$height = 6;
printStaircase($height);
?>
