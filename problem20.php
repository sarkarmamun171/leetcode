<?php
function mergeSortedLists($list1, $list2) {
    $mergedList = [];
    $i = 0;
    $j = 0;
    
    while ($i < count($list1) && $j < count($list2)) {
        if ($list1[$i] <= $list2[$j]) {
            $mergedList[] = $list1[$i];
            $i++;
        } else {
            $mergedList[] = $list2[$j];
            $j++;
        }
    }
    
    while ($i < count($list1)) {
        $mergedList[] = $list1[$i];
        $i++;
    }
    
    while ($j < count($list2)) {
        $mergedList[] = $list2[$j];
        $j++;
    }
    
    return $mergedList;
}

// Example usage
$list1 = [1, 2, 4];
$list2 = [1, 3, 4];
$result = mergeSortedLists($list1, $list2);
print_r($result);
?>
