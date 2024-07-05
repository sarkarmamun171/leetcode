<?php
function isValid($s) {
    // Stack to keep track of opening brackets
    $stack = [];
    // Map to hold the matching pairs
    $map = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    // Iterate through each character in the string
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        // If the character is a closing bracket
        if (isset($map[$char])) {
            // Pop the top element from the stack if it's not empty, otherwise assign a dummy value
            $topElement = !empty($stack) ? array_pop($stack) : '#';

            // If the top element does not match the corresponding opening bracket, return false
            if ($topElement !== $map[$char]) {
                return false;
            }
        } else {
            // If it's an opening bracket, push it onto the stack
            array_push($stack, $char);
        }
    }

    // If the stack is empty, all opening brackets were properly matched
    return empty($stack);
}

// Example usage
$input = "({[]})";
if (isValid($input)) {
    echo "The string is valid.";
} else {
    echo "The string is not valid.";
}
?>
