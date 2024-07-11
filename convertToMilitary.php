
<?php
function convertToMilitaryTime($time) {
    // Extract the AM/PM part
    $period = substr($time, -2);

    // Extract the hour, minute, and second parts
    $hour = substr($time, 0, 2);
    $minute = substr($time, 3, 2);
    $second = substr($time, 6, 2);

    // Convert hour to integer for easier manipulation
    $hour = intval($hour);

    // Handle conversion based on AM/PM
    if ($period == 'AM') {
        if ($hour == 12) {
            $hour = 0; // Midnight case
        }
    } else {
        if ($hour != 12) {
            $hour += 12; // PM case but not noon
        }
    }

    // Format the hour back to two digits
    $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);

    // Combine and return the military time
    return "$hour:$minute:$second";
}

// Example usage
$time = "07:05:45PM";
echo convertToMilitaryTime($time); // Output: 19:05:45
?>
