<?php

function countCamelCaseWords($s) {
    // Initialize the word count to 1 because the first word is all lowercase
    $wordCount = 1;
    
    // Loop through each character in the string
    for ($i = 0; $i < strlen($s); $i++) {
        // If the character is uppercase, it indicates a new word
        if (ctype_upper($s[$i])) {
            $wordCount++;
        }
    }
    
    return $wordCount;
}

// Example usage:
$inputString = "thisIsCamelCaseExample";
echo "Number of words in '$inputString': " . countCamelCaseWords($inputString);

?>
