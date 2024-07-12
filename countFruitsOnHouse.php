<?php

function countFruitsOnHouse($s, $t, $a, $b, $apples, $oranges) {
    $applesOnHouse = 0;
    $orangesOnHouse = 0;

    // Count apples on house
    foreach ($apples as $apple) {
        $fallingPoint = $a + $apple;
        if ($fallingPoint >= $s && $fallingPoint <= $t) {
            $applesOnHouse++;
        }
    }

    // Count oranges on house
    foreach ($oranges as $orange) {
        $fallingPoint = $b + $orange;
        if ($fallingPoint >= $s && $fallingPoint <= $t) {
            $orangesOnHouse++;
        }
    }

    return [$applesOnHouse, $orangesOnHouse];
}

// Example usage:
$s = 7;
$t = 11;
$a = 5;
$b = 15;
$apples = [-2, 2, 1];
$oranges = [5, -6];

list($applesOnHouse, $orangesOnHouse) = countFruitsOnHouse($s, $t, $a, $b, $apples, $oranges);

echo "Number of apples on house: $applesOnHouse\n";
echo "Number of oranges on house: $orangesOnHouse\n";
?>
