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
echo "<br>";


// mktime(H,M,S,Mo,D,Y)

echo "I was born on ".date("d-m-Y", mktime(16,15,35,01,22,1996))." ";
echo " at ".date("h:i:s A", mktime(16,15,35,01,22,1996))." ";
echo "on ".date("l", mktime(16,15,35,01,22,1996)).".<br>";
echo "------------<br>";


// gmmktime(H,M,S,Mo,D,Y)       greeenwich mean time (GMT) default time format is European time hence
// it wil show any current european time

echo "I was born on ".date("d-m-Y", gmmktime(16,15,35,01,22,1996))." ";
echo " at ".date("h:i:s A", gmmktime(16,15,35,01,22,1996))." ";
echo "on ".date("l", gmmktime(16,15,35,01,22,1996)).".<br>";
echo "------------<br>";


$myPastDate = date_create("1996-01-22 14:25:15");
echo date_format($myPastDate,"l");
echo "<br>------------<br>";

$myFutureDate = date_create("2015-10-15");
echo date_format($myFutureDate,"l");

echo "<br>------------<br>";
$myFutureDate = date_create("2025-10-15 22:25:15");
echo date_format($myFutureDate,"d/m/Y H:i:s");

echo "<br>------------<br>";
$myFutureDate = date_create("2025-10-15 22:25:15", timezone_open("Asia/Kolkata"));
// $myFutureDate = date_create("2025-10-15 22:25:15", timezone_open("Australia/Queensland"));
echo date_format($myFutureDate,"d/m/Y H:i:s");

// checkdate(Month,Date,Year)
// shows 1 if the date is a valid date else does not show any output

echo "<br>------------<br>";
echo checkdate(12,13,2004);     // shows 1 as the date is a valid date
echo "<br>------------<br>";
echo checkdate(2,29,2024);     // shows 1 confirms 2024 is a leap year
echo "<br>------------<br>";
echo checkdate(13,13,2004);     // wil not show any output as the date is not a valid date as there is no 13th month 
echo "<br>------------<br>";

$myFirstDate = date_create("1996-01-22 16:15:35");
$mySecondDate = date_create(date('Y-m-d'));
$DaysOfLife = date_diff($myFirstDate,$mySecondDate);

echo "<pre>";
print_r($DaysOfLife);       // returns the ARRAY OF OBJECTS of years,month,days,hours,minutes,seconds,days as difference output

// we use -> (Arrow operator ) to fetch the value of individial object frm the array of objects )
echo "I am ".$DaysOfLife->y." Years old.<br>";
echo "I am ".$DaysOfLife->days." Days old. ";
*/

/*
-------------------------------------------------------------------------------------------------- 
if the dates given there are in reverse order 
that is firstDate is any future date and SecondDate is a past date 
then using second parameter we can get the answer same but having an element "invert" as value 1 and 
that shows the answer is a negative valued answer.
--------------------------------------------------------------------------------------------------
*/

/*
echo "<br>------------<br>";

$myFirstDate = date_create("2096-04-22 16:15:35");
$mySecondDate = date_create(date('Y-m-d'));
$DaysOfLife = date_diff($myFirstDate,$mySecondDate);
// $DaysOfLife = date_diff($mySecondDate,$myFirstDate);

echo "<pre>";
print_r($DaysOfLife);
echo "<br>";
echo $DaysOfLife->days." Days of your life is remaining.";

// but we can use format function to show it actually negative value difference as follows
echo "<br>------------<br>";
echo $DaysOfLife->format("%r%a Days Left")."<br>";
echo $DaysOfLife->format(" you are %r%y Years %r%m and months old from current date.");

echo "<br>------------<br>";

$myDOB = date_create("1996-01-22");
date_add($myDOB,date_interval_create_from_date_string("11000 days"));
echo "Date after 11000 days of my DOB will be ".date_format($myDOB, "d-m-Y")
."<br>and day will be ".date_format($myDOB,"l.");

echo "<br>------------<br>";
$myDOB = date_create(date("Y-m-d"));
date_sub($myDOB,date_interval_create_from_date_string("5000 days"));
echo "when i was of 5000 days the date was ".date_format($myDOB, "d-m-Y")
."<br>and day was was ".date_format($myDOB,"l.");

echo "<br>------------<br>";
$myDOB = date_create("1996-01-22");
date_modify($myDOB,"15000 days");
echo "when i will be of 15000 days the date will be ".date_format($myDOB, "d-m-Y")
."<br>and day will be ".date_format($myDOB,"l.");

echo "<br>------------<br>";
$curDate = date_create(date("Y-m-d"));
// print_r ($curDate);
date_modify($curDate,"-5000 days");
echo "the date before 5000 days from today was ".date_format($curDate, "d-m-Y")
."<br>and day was ".date_format($curDate,"l.");
*/

echo "<br>------------<br>";
echo date_default_timezone_get();
echo "<br>------------<br>";
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();

echo "<br>------*******------<br>";
$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz);

echo "<br>------------<br>";
echo "<pre>";
$tz1 = timezone_open("Europe/london");
print_r(timezone_location_get($tz1));        // gives countrycode, latitude and longitude of current timezone location
echo "<br>------------<br>";

echo "<pre>";
// print_r(timezone_identifiers_list());   // provides the list of all timezones
// print_r(timezone_identifiers_list(2047));   // provides the list of all timezones
// print_r(timezone_identifiers_list(1));   // provides the list of all timezones of Aftrica
// print_r(timezone_identifiers_list(2));   // provides the list of all timezones of America
// print_r(timezone_identifiers_list(4));   // provides the list of all timezones of Antarctica
// print_r(timezone_identifiers_list(8));   // provides the list of all timezones of Arctic
// print_r(timezone_identifiers_list(16));   // provides the list of all timezones of Asia
// print_r(timezone_identifiers_list(32));   // provides the list of all timezones of Atlantic
// print_r(timezone_identifiers_list(64));   // provides the list of all timezones of Australia
// print_r(timezone_identifiers_list(128));   // provides the list of all timezones of Europe
// print_r(timezone_identifiers_list(256));   // provides the list of all timezones of Indian
// print_r(timezone_identifiers_list(512));   // provides the list of all timezones of Pacific
// print_r(timezone_identifiers_list(1024));   // provides the list of all timezones of UTC
// print_r(timezone_identifiers_list(4095));   // provides the list of all timezones of all country

// $oldDate = mktime(16,12,13,05,10,2010);              // if we want to show any old date and time
// $myGetDateRes = getdate($oldDate);

$myGetDateRes = getdate();

echo "<pre";
print_r($myGetDateRes);     // returns an array of seconds,minutes,hours,month-day(digit),week-day(digit),month,year,year-day,week-day(name),month-day(name),day-seconds
echo "<br>------------<br>";
print_r($myGetDateRes['month']);
echo "<br>------------<br>";
print_r($myGetDateRes['yday']);
echo "<br>------------<br>";

echo "<br>------------<br>";
print_r(gettimeofday());    // returns array of second, microseconds and 2 more key value pairs
echo "<br>------------<br>";
echo gettimeofday(true);    // returns only seconds.microseconds of the current time

echo "<br>------------<br>";
print_r(localtime(time(), true));    // returns only seconds.microseconds of the current time of localserver
// print_r(localtime($oldDate, true));    // returns only seconds.microseconds of oldate time passed manually

echo "<br>------------<br>";
$myDobInfo = date_parse('1996-01-22 16:12:34.6');
echo "<pre>";
print_r($myDobInfo);

echo "<br>------------<br>";
$myDobInfo = date_parse_from_format('Y-m-d H:i:s','1996-01-22 16:12:35');
echo "<pre>";
print_r($myDobInfo);

echo "<br>------------<br>";
$myStrToDate = date("d-m-Y h:i:s",strtotime('now'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y h:i:s",strtotime('22 January 1196 16:12:35'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y H:i:s",strtotime('+1 week'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y H:i:s",strtotime('+1 week 3 days 9 hours 24 minutes 21 seconds'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y H:i:s",strtotime('next Monday'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y H:i:s",strtotime('last Monday'));
echo $myStrToDate;
echo "<br>------------<br>";
$myStrToDate = date("d-m-Y H:i:s",strtotime('first day of last month'));
echo $myStrToDate;

echo "<br>------------<br>";
echo "<br>------------<br>";
$strFormatToDateTime = strftime('%r');        // deprecated but stil working, shows current time in H:M:S AM/PM format
echo $strFormatToDateTime;
echo "<br>------------<br>";
$strFormatToDateTime = strftime('%T');        // deprecated but stil working, shows current time in H:M:S format
echo $strFormatToDateTime;
echo "<br>------------<br>";
$strFormatToDateTime1 = strftime('%X');        // deprecated but stil working, shows current time in H:M:S format
echo $strFormatToDateTime1;
echo "<br>------------<br>";
$strFormatToDateTime1 = strftime('%x');        // deprecated but stil working, shows current date in mm/dd/yy format
echo $strFormatToDateTime1;
echo "<br>------------<br>";
$strFormatToDateTime1 = strftime('%Z');        // deprecated but stil working, shows current timezone value
echo $strFormatToDateTime1;
echo "<br>------------<br>";
$strFormatToDateTime1 = strftime('%d %B %Y, %r');        // deprecated but stil working, shows current day,month-name, year and time value
echo $strFormatToDateTime1;
echo "<br>------------<br>";
$strFormatToDateTime1 = strftime('%d/%m/%Y, %H:%M:%S',mktime(14,45,23,12,10,2027));        // deprecated but stil working, shows current day,month-name, year and time value of customised datetime value
echo $strFormatToDateTime1;
echo "<br>------------<br>";
$strFormatToDateTime1 = gmstrftime('%d/%m/%Y, %H:%M:%S',mktime(14,45,23,12,10,2027));        // deprecated but stil working, shows current day,month-name, year and time value of customised datetime value
echo $strFormatToDateTime1;

echo "<br>------------<br>";
$meriTithi = date_create("2010-11-05");
$meriPurnTithiSamay = date_time_set($meriTithi,16,23,21);
echo date_format($meriPurnTithiSamay,"d-m-Y H:i:s");


?>