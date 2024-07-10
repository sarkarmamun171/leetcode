<?php
// Define the ListNode class
class ListNode {
    public $val;
    public $next;
    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

// Function to remove duplicates from sorted list
function deleteDuplicates($head) {
    $current = $head;
    while ($current && $current->next) {
        if ($current->val === $current->next->val) {
            $current->next = $current->next->next;
        } else {
            $current = $current->next;
        }
    }
    return $head;
}

// Helper function to convert array to linked list
function arrayToList($arr) {
    if (!$arr) return null;
    $head = new ListNode($arr[0]);
    $current = $head;
    for ($i = 1; $i < count($arr); $i++) {
        $current->next = new ListNode($arr[$i]);
        $current = $current->next;
    }
    return $head;
}

// Helper function to convert linked list to array
function listToArray($head) {
    $arr = [];
    while ($head) {
        $arr[] = $head->val;
        $head = $head->next;
    }
    return $arr;
}

// Input
$inputArray = [1, 1, 2];

// Convert array to linked list
$head = arrayToList($inputArray);

// Remove duplicates
$head = deleteDuplicates($head);

// Convert linked list back to array
$outputArray = listToArray($head);

// Output
print_r($outputArray);
?>
