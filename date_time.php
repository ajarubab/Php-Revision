<?php

/*
// for date
echo "<br>";
echo date('d');         // current day of the week digit number with 0 prefix
echo "<br>";
echo date('j');         // current day of the week digit number without 0 prefix
echo "<br>";
echo date('S');         // for st,nd,rd and th 
echo "<br>";
echo date('jS');        // e.g 1st or 2nd or 3rd or 29th
echo "<br>";
echo date('D');         // Shows current day name in 3 lettered word
echo "<br>";
echo date('l');         // Shows full name of current day
echo "<br>";
echo date('N');         // Shows current day number digit   firstday - monday(1), lastday- sunday(7)
echo "<br>";
echo date('w');         // Shows current day number digit   firstday - sunday(0), lastday- saturday(6)
echo "<br>";
echo date('W');         // Shows current week number of the current year
echo "<br>";
echo date('z');         // Shows current day number of the current year


// fom month
echo "<br>";
echo date('F');     // Shows full word current month name
echo "<br>";
echo date('m');     // current month digit output with prefix 0 for single digits output
echo "<br>";
echo date('M');     // Shows 3 lettered current month name
echo "<br>";
echo date('n');     // current month digit output without prefix 0 for single digits output
echo "<br>";
echo date('t');         // Shows number of days in the current month


// for year
echo "<br>";
echo date('Y');     // Shows full current year digit numbers
echo "<br>";
echo date('y');     // Shows 2 digited current year number
echo "<br>";
echo date('L');         // Shows current year is leap year(1) or not a leap year(0)


echo "<br>------------------<br>";

    echo date("D M Y");
    echo "<br>The Date of today is <b>".date("d")."</b><br>";
    echo "Date of Today is <b>".date("j")."</b><br>";
    echo "Short form of this month is <b>".date("M")."</b><br>";
    echo "This month is <b>".date("F")."</b><br>";
    echo "This is month number <b>".date("m")."</b><br>";
    echo "Today is <b>".date("D")."</b><br>";
    echo "Today is <b>".date("l")."</b><br>";
    echo "Year of Today is <b>".date("Y")."</b><br>";
    echo "Short-Year of Today is <b>".date("y")."</b><br>";
    echo "Current Time in 12 Hour format is  <b>".date("h:i:s A")."</b><br>";        // time but don't know of where
    echo "Current Time in 24 Hour format is  <b>".date("H:i:s")."</b><br>";        // time but don't know of where
    echo "Date is <b>".date("j-m-y")."</b><br>";
    echo "Date is <b>".date("j/m/y")."</b><br>";
    echo "Date is <b>".date("d-M-Y")."</b><br>";
    echo "Date is <b>".date("d/M/Y")."</b><br>";
    echo "Date is <b>".date("jS/D/Y")."</b><br>";
    echo date('\I\t \i\s \t\h\e jS \o\f F Y \.')."<br>";

    echo "<br>------------------<br>";
*/

// --------- For Hours -----------

date_default_timezone_set("Asia/Kolkata");  // sets indian Timezone
echo time();

echo "<br>";
echo date('h');     // shows hours 12 hour format ( from 01 to 12)
echo "<br>";
echo date('H');     // shows hours in 24 hour format ( from 00 to 23)
echo "<br>";
echo date('g');     // shows hours 12 hour format ( from 1 to 12) [exluded 0 prefix from single digits]
echo "<br>";
echo date('G');     // shows hours 24 hour format ( from 0 to 23) [exluded 0 prefix from single digits]


// --------- For Minutes -----------
echo "<br>";
echo date('i');     // shows current time minutes ( from 00 to 59)

// --------- For Seconds -----------
echo "<br>";
echo date('s');     // shows current time seconds ( from 00 to 59)


// --------------------- For Meridian ---------------

echo "<br>";
echo date('a');     // shows current am or pm of current time
echo "<br>";
echo date('A');     // shows current AM or PM of current time

// ------------

echo "<br>";
echo " Current time is : ".date('h:i:s a');     // shows full current time in 12 hour format

echo "<br>";
echo " Current time is : ".date('G:i:s A');     // shows full current time in 24 hour format

echo "<br>";
echo " Current Date and time is : ".date('d-m-Y h:i:s A');     // shows full current time in 12 hour format

?>