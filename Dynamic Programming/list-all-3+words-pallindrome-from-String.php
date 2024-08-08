<?php
function listAllPalindromes($s)
{
    $n = strlen($s);
    $dp = array_fill(0, $n, array_fill(0, $n, false));
    $palindromes = [];

    // All substrings of length 1 are palindromes
    for ($i = 0; $i < $n; $i++) {
        $dp[$i][$i] = true;
    }

    // Check for substrings of length 2
    for ($i = 0; $i < $n - 1; $i++) {
        if ($s[$i] == $s[$i + 1]) {
            $dp[$i][$i + 1] = true;
            if (strlen($s[$i] . $s[$i + 1]) >= 3) {
                $palindromes[] = $s[$i] . $s[$i + 1];
            }
        }
    }

    // Check for lengths greater than 2
    for ($length = 3; $length <= $n; $length++) {
        for ($i = 0; $i < $n - $length + 1; $i++) {
            $j = $i + $length - 1;

            // Checking for sub-string from ith index to jth index
            if ($s[$i] == $s[$j] && $dp[$i + 1][$j - 1]) {
                $dp[$i][$j] = true;
                $palindromes[] = substr($s, $i, $length);
            }
        }
    }

    return $palindromes;
}

// Example usage
$inputString = "babsaippuakivikauppiasaradard";
$palindromes = listAllPalindromes($inputString);

echo "The palindromic substrings of length 3 or more in '$inputString' are: \n";
foreach ($palindromes as $palindrome) {
    echo "<br><hr>". $palindrome;
}
