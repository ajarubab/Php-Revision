<?php
function findMissingNumber($totalNumbers)
{
    // Create an array with ascending numbers from 1 to $totalNumbers
    $numbers = range(1, $totalNumbers);

    // Randomly remove one number
    $missingIndex = array_rand($numbers);
    $missingNumber = $numbers[$missingIndex];
    unset($numbers[$missingIndex]);

    // Display the array with the missing number
    echo "Array with missing number: ";
    foreach ($numbers as $number) {
        echo "<br>".$number . " ";
    }
    echo "\n";

    // Find and display the missing number
    echo "<br>The missing number is: " . $missingNumber . "\n";
}

// Example usage
$totalNumbers = 10;
findMissingNumber($totalNumbers);
