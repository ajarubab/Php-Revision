<?php

//          METHOD 1
function ageCalculator($dob) {
    if (!empty($dob)) {
        $birthdate = new DateTime($dob);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    } else {
        return 0;
    }
}

$dob = '1996-01-23'; // Replace with the actual DOB
echo "You are ".ageCalculator($dob)." years old now.";


/*
//              METHOD 2
// Hardcoded date of birth
$dob = "23/01/1996";

// Split the date to get day, month, year
$birthDate = explode("/", $dob);

// Validate the input format
if (count($birthDate) == 3 && checkdate($birthDate[1], $birthDate[0], $birthDate[2])) {
    // Convert the input date to a DateTime object
    $birthDate = DateTime::createFromFormat('d/m/Y', $dob);
    $currentDate = new DateTime(); // Current date and time

    // Calculate the difference between the current date and birthdate
    $interval = $currentDate->diff($birthDate);

    // Format the difference as "X years Y months Z days"
    $age = $interval->y . " years " . $interval->m . " months " . $interval->d . " days";

    // Output the age
    echo "Your age is: " . $age;
} else {
    echo "Invalid date format. Please use dd/mm/yyyy.";
}
*/

?>