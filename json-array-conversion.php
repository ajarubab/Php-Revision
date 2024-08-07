<?php


$arr = ["Name"=>"Raja","Age"=> 26,"City"=>"New Delhi","NRI"=>false];
print_r($arr);

// Array to JSON ( Javascript Object Notaion) format conversion
$arrJson = json_encode($arr);
echo "<hr>";
echo "<br>ARRAY to JSON : <br><br>";
echo $arrJson;


$JsonData = '{"Name":"Raja","Age":26,"City":"New Delhi","NRI":false}';

// JSON ( Javascript Object Notaion) format conversion to Object
$jsonToObject = json_decode($JsonData);
echo "<hr>";
echo "<br>JSON to OBJECT : <br><br>";
print_r($jsonToObject);

// JSON ( Javascript Object Notaion) format conversion to Object
$jsonToArray = json_decode($JsonData, true);
echo "<hr>";
echo "<br>JSON to ARRAY : <br><br>";
print_r($jsonToArray);
?>