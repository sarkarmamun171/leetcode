<?php

function hackerrankInString($s) {
    $target = 'hackerrank';
    $j = 0;
    $n = strlen($target);
    
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == $target[$j]) {
            $j++;
        }
        if ($j == $n) {
            return "YES";
        }
    }
    return "NO";
}

// Example usage:
$strings = ["hereiamstackerrank", "hackerworld"];
foreach ($strings as $s) {
    echo hackerrankInString($s) . "\n";
}
?>
