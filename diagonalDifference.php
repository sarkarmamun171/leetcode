<?php
function diagonalDifference($matrix) {
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;
    $n = count($matrix); // Since it's a square matrix, number of rows equals number of columns

    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonalSum += $matrix[$i][$i];
        $secondaryDiagonalSum += $matrix[$i][$n - $i - 1];
    }

    return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}

$matrix = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

echo "Absolute difference between the sums of the diagonals: " . diagonalDifference($matrix) . "\n";
?>
