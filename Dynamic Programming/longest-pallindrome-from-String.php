<?php
function longestPalindrome($s)
{
    $n = strlen($s);
    if ($n == 0) return "";

    // Table to store the palindrome status
    $dp = array_fill(0, $n, array_fill(0, $n, false));

    $start = 0; // Start index of the longest palindrome
    $maxLength = 1; // Length of the longest palindrome

    // All substrings of length 1 are palindromes
    for ($i = 0; $i < $n; $i++) {
        $dp[$i][$i] = true;
    }

    // Check for substring of length 2
    for ($i = 0; $i < $n - 1; $i++) {
        if ($s[$i] == $s[$i + 1]) {
            $dp[$i][$i + 1] = true;
            $start = $i;
            $maxLength = 2;
        }
    }

    // Check for lengths greater than 2
    for ($length = 3; $length <= $n; $length++) {
        for ($i = 0; $i < $n - $length + 1; $i++) {
            $j = $i + $length - 1;

            // Checking for sub-string from ith index to jth index
            if ($s[$i] == $s[$j] && $dp[$i + 1][$j - 1]) {
                $dp[$i][$j] = true;

                if ($length > $maxLength) {
                    $start = $i;
                    $maxLength = $length;
                }
            }
        }
    }

    return substr($s, $start, $maxLength);
}

// Example usage
$inputString = "babsaippuakivikauppiasaradard";
echo "The longest palindrome substring in '$inputString' is: " . longestPalindrome($inputString);
