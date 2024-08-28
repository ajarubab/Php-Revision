<?php


$message = "Hello guys how are you doing";

$myMsgArr = explode(" ", $message);
echo "<pre>";
print_r($myMsgArr);

$myMsgArr = explode(" ", $message, 3);
echo "<pre>";
print_r($myMsgArr);

$myMsgArr = explode(" ", $message, -2);     // removes last 2 elements of the actual array any return remaning elements in new array
echo "<pre>";
print_r($myMsgArr);

echo "<br><hr><br>";


$myMsg = array(
    "Hello",
    "guys",
    "how",
    "are",
    "you",
    "doing"
);

$myMsgString = implode(" -- ",$myMsg);
echo $myMsgString;

echo "<br><hr><br>";

$myMsgString = implode("<br>",$myMsg);
echo $myMsgString;
echo "<br><hr><br>";

$myMsgString = join(" - ",$myMsg);
echo $myMsgString;
echo "<br><hr><br>";


?>