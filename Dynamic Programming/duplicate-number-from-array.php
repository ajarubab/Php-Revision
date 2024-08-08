<?php
/*

// ---------------------- Method 1 : USING SOME OF PHP INBUILT FUNCTIONS ----------------------

// Function to generate an array of N random numbers
function generateRandomNumbers($count) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
    }
    return $numbers;
}

// Function to find duplicates and their frequencies, and separate them
function findDuplicatesWithFrequency($numbers) {
    $counts = array_count_values($numbers);
    $duplicates = [];
    $unique = [];
    
    foreach ($counts as $number => $count) {
        if ($count > 1) {
            $duplicates[$number] = $count; // Store the frequency of each duplicate number
        } else {
            $unique[] = $number;
        }
    }
    
    return [$unique, $duplicates];
}


// ---------------------- Method 2 : WITHOUT USING PHP INBUILT FUNCTIONS ----------------------

function generateRandomNumbers($count)
{
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
    }
    return $numbers;
}

// Function to find duplicates and their frequencies manually
function findDuplicatesWithFrequency($numbers)
{
    $counts = [];
    $duplicates = [];
    $unique = [];

    // Count occurrences of each number
    foreach ($numbers as $number) {
        if (isset($counts[$number])) {
            $counts[$number]++;
        } else {
            $counts[$number] = 1;
        }
    }

    // Separate duplicates from unique numbers
    foreach ($counts as $number => $count) {
        if ($count > 1) {
            $duplicates[$number] = $count; // Store the frequency of each duplicate number
        } else {
            $unique[] = $number;
        }
    }

    return [$unique, $duplicates];
}

// ---------------------- Method 3 : WITHOUT USING FOREACH LOOP ----------------------

// Function to generate an array of N random numbers
function generateRandomNumbers($count) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
    }
    return $numbers;
}

// Function to find duplicates and their frequencies using basic loops
function findDuplicatesWithFrequency($numbers) {
    $counts = [];
    $duplicates = [];
    $unique = [];
    $size = count($numbers);

    // Count occurrences of each number
    for ($i = 0; $i < $size; $i++) {
        $number = $numbers[$i];
        $found = false;

        for ($j = 0; $j < count($counts); $j++) {
            if ($counts[$j][0] == $number) {
                $counts[$j][1]++;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $counts[] = [$number, 1];
        }
    }

    // Separate duplicates from unique numbers
    for ($i = 0; $i < count($counts); $i++) {
        $number = $counts[$i][0];
        $count = $counts[$i][1];

        if ($count > 1) {
            $duplicates[$number] = $count; // Store the frequency of each duplicate number
        } else {
            $unique[] = $number;
        }
    }

    return [$unique, $duplicates];
}
*/

// ---------------------- Method 4 : WITHOUT USING FOREACH LOOP (SECOND METHOD) ----------------------

// Function to generate an array of N random numbers
function generateRandomNumbers($count) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
    }
    return $numbers;
}

// Function to find duplicates and their frequencies using basic for loops
function findDuplicatesWithFrequency($numbers) {
    $counts = [];
    $size = count($numbers);

    // Count occurrences of each number
    for ($i = 0; $i < $size; $i++) {
        $number = $numbers[$i];
        $index = -1;
        
        // Check if the number is already counted
        for ($j = 0; $j < count($counts); $j++) {
            if ($counts[$j][0] == $number) {
                $index = $j;
                break;
            }
        }

        if ($index == -1) {
            // Not found, add it
            $counts[] = [$number, 1];
        } else {
            // Found, increment the count
            $counts[$index][1]++;
        }
    }

    // Separate duplicates from unique numbers
    $unique = [];
    $duplicates = [];
    for ($i = 0; $i < count($counts); $i++) {
        if ($counts[$i][1] > 1) {
            $duplicates[$counts[$i][0]] = $counts[$i][1];
        } else {
            $unique[] = $counts[$i][0];
        }
    }

    return [$unique, $duplicates];
}

// -----------------------------------------------------------------------------------------------

// Generate an array of N random numbers
$numbers = generateRandomNumbers(50);

// Find duplicates with frequencies and separate them
list($uniqueNumbers, $duplicates) = findDuplicatesWithFrequency($numbers);

// Display the results
echo "Original numbers:\n";
foreach ($numbers as $num) {
    echo "$num" . " ";
}
echo "<br><hr><br>";

echo "Unique numbers (no duplicates):\n";
foreach ($uniqueNumbers as $uq) {
    echo "$uq" . " ";
}
echo "<br><hr><br>";

echo "Duplicates with frequencies: <br>";
// print_r($duplicates);
foreach ($duplicates as $uq => $tm) {
    echo "<br>" . "$uq" . " : " . "$tm times";
}
