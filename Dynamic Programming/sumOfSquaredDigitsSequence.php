<?php

function sumOfSquaredDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit * $digit;
        $num = (int)($num / 10);
    }
    return $sum;
}

function solution($a0) {
    $sequence = [];
    $current = $a0;

    while (!in_array($current, $sequence)) {
        $sequence[] = $current;
        $current = sumOfSquaredDigits($current);
    }

    // Add the repeated element to the sequence
    $sequence[] = $current;

    return count($sequence);
}

// Example usage
echo solution(285);  // Output: 9
echo "\n";
echo solution(103); // Output: 4

?>
