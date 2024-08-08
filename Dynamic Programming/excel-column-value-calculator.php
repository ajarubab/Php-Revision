<?php
function excelColumnToNumber($columnName)
{
    $length = strlen($columnName);
    $result = 0;

    for ($i = 0; $i < $length; $i++) {
        $result *= 26;
        $result += ord($columnName[$i]) - ord('A') + 1;
    }

    return $result;
}

// Example usage
$columnName = "AB";
$value = excelColumnToNumber($columnName);
echo "The value of column '$columnName' is: $value\n";

echo "<h>";