<?php
$a = 20;
if ($a < 30) {
    echo "\$a is less than 30";
}

echo "<br>";
echo "<br>";

if ($a < 20) {
    echo "\$a is less than 20";
} else {
    echo "\$a is greater than 20";
}

echo "<br>";
echo "<br>";

if ($a < 20) {
    echo "\$a is less than 20";
} elseif ($a === 20) {                // once the condition get matched, it escapes ahead code.
    echo "\$a is equal to 20";
} elseif ($a > 10) {                  // even if this elseif is also corrrect, it will not get executed.
    echo "\$a is greater than 10";
} else {
    echo "\$a has some other value";
}

echo "<br>";
echo "<br>";

// $country = "India";
// $country = "india";
$country = "bharat";
if ($country == "Bharat") {
    echo "Bharat desh me swagat hai aapka";
} elseif ($country == "bharat") {
    echo "bharat aappka swagat krta hai.";
} elseif ($country == "India") {
} elseif ($country == "india") {
    echo "welcome to india";
} elseif ($country == "India") {
    echo "Greeting from India";
}
