<?php
function caesarCipher($text, $shift) {
    $result = '';
    $shift = $shift % 26; // Ensure the shift is within the range of 0-25

    // Loop through each character in the text
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        // Check if the character is a letter
        if (ctype_alpha($char)) {
            $ascii_offset = ctype_upper($char) ? ord('A') : ord('a');
            // Perform the shift
            $new_char = chr(($ord($char) - $ascii_offset + $shift) % 26 + $ascii_offset);
            $result .= $new_char;
        } else {
            // If it's not a letter, leave it unchanged
            $result .= $char;
        }
    }

    return $result;
}

// Example usage
$plaintext = "Hello, World!";
$shift = 3;

$encrypted = caesarCipher($plaintext, $shift);
echo "Encrypted: " . $encrypted . "\n";

$decrypted = caesarCipher($encrypted, 26 - $shift); // Decrypt by shifting back
echo "Decrypted: " . $decrypted . "\n";
?>
