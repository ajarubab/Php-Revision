<?php

/*
    // using Inbuit Function
    $arr = [1,2,3,4,5,6,5,4,2,8,9,3,5,7,9,3,2,6,9,0,1,2,4,2,5,7,9];
    print_r(array_unique($arr));
    echo "<br><hr><br> the frequency of each digits is : <br> ";
    print_r(array_count_values($arr));
*/

echo "---------------------- Method 1 : USING SOME OF PHP INBUILT FUNCTIONS ----------------------<br>";

// Function to generate an array of N random numbers
function generateRandomNumbers($count) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
    }
    return $numbers;
}

// Function to find duplicates and their frequencies, and separate them

/*
array_count_values() takes an array as input.
It returns an associative array, where:
The keys are the unique values from the original array.
The values represent how many times each key appears in the array.
*/
/*
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
*/

// ---------------------- Method 2 : WITHOUT USING PHP INBUILT FUNCTIONS ----------------------
/*
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
*/
// ---------------------- Method 3 : WITHOUT USING FOREACH LOOP ----------------------
/*
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
/*
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
*/

// ----------- SHORT CUT METHOD TO FIND DUPLICATE DIGITS AND THEIR FREQUENCY ----------------------

function findDuplicatesWithFrequency($numbers) {
    $counts = array_count_values($numbers);
    
    // Get duplicates (values that appear more than once)
    $duplicates = array_filter($counts, fn($count) => $count > 1);

    // Get unique values (values that appear exactly once) by excluding $duplicates from $counts
    $unique = array_diff_key($counts, $duplicates);

    return [array_keys($unique), $duplicates];
}


// -----------------------------------------------------------------------------------------------

// Generate an array of N random numbers
$numbers = generateRandomNumbers(50);

// Find duplicates with frequencies and separate them
list($uniqueNumbers, $duplicates) = findDuplicatesWithFrequency($numbers);

// Display the results
echo "Original numbers:\n";
foreach ($numbers as $num) {
    print("$num ");
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


/*
$arr = [];
for($i = 1; $i<=rand(20,99);$i++){
    $arr[$i] = rand(10,99);
}

print("<br> Numbers are : <br>");
foreach($arr as $x){
    print("$x ");
}

$arr2 = array_count_values($arr);

// print("<br><br> Frequency of each numbers are : <br><br>");
// foreach($arr2 as $x => $y){
//     print("$x : $y times<br>");
// }

$duplicate_num = array_filter($arr2, fn($arr2)=>$arr2 > 1);

print("<br><br> Duplicate Numbers and their frequencies are : <br><br>");
foreach($duplicate_num as $m => $n){
    print("$m : $n times<br>");
}

$unique_num = array_diff($arr2,$duplicate_num);

print("<br><br> Non-repeating numbers are : <br><br>");
foreach($unique_num as $m => $n){
    print("$m ");
}
*/
