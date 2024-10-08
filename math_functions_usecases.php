<?php

$minNum = min(12,34,8); // caution dont use 01...09 , it will raise parse error
echo "Minimum among 12 , 34 and 8 is : $minNum";
echo "<br>";

$maxNum = max(12,34,8); // caution dont use 01...09 , it will raise parse error
echo "Maximum among 12 , 34 and 8 is : $maxNum";
echo "<br>";
echo "<br>------------------------------<br>";
$myRandomDigits = [];

for($i=1;$i<=10;$i++){
    $myRandomDigits[$i] = rand(100,999);
}

echo "<pre>";
print_r($myRandomDigits);

echo "<br>";
echo "Maximum number of above array is : ". max($myRandomDigits);

echo "<br>";
echo "Minimum number of above array is : ". min($myRandomDigits);
echo "<br>";
echo "<br>------------------------------<br>";

// abs() gives positive output of negative ones
echo "<br>";
$myNegValue = -(rand(11,99)/10);
$myABSVal =  abs($myNegValue);
echo "Random decimal number : $myNegValue and its absolute value : $myABSVal";

// ceil() gives next rounded off digit
echo "<br>";
$myDecNum = rand(11,99)/10;
$myNumCeilValue = ceil($myDecNum);
echo "Random decimal number : $myDecNum and its ceil value : $myNumCeilValue";

// floor() gives previous rounded off digit
echo "<br>";
$myDecNum = rand(11,99)/10;
$myNumFloorValue = floor($myDecNum);
echo "Random decimal number : $myDecNum and its floored number : $myNumFloorValue";

// gives just previous rounded off whole number if decimal is less than .5 and
// gives next rounded off whole number if decimal is greater than .5
echo "<br>";
$myDecNum = rand(11,99)/10;
$myNumRoundFig = round($myDecNum);
echo "Random decimal number : $myDecNum and its rounded off number : $myNumRoundFig";

echo "<br>------------------------------<br>";
$myIntDig1 = rand(10,99);
$myIntDig2 = mt_rand(2,9);
$myNumIntdivRes = intdiv($myIntDig1,$myIntDig2);
echo "Random 1st Integer : $myIntDig1 <br>Random 2nd Integer : $myIntDig2 <br>and its intdiv() result : $myNumIntdivRes";

echo "<br>------------------------------<br>";
$myBaseDig = rand(1,9);
$myNegBaseDig = -(rand(1,9));
$myPowerDig = mt_rand(1,4);
$myNegPowerDig = -(mt_rand(1,4));
$myExponentialRes = pow($myBaseDig,$myPowerDig);
$myNegExponentialRes = pow($myNegBaseDig,$myNegPowerDig);
$myNegMixedExponentialRes1 = pow($myBaseDig,$myNegPowerDig);
$myNegMixedExponentialRes2 = pow($myNegBaseDig,$myPowerDig);
echo "$myBaseDig raised to the power $myPowerDig results : $myExponentialRes";
echo "<br>$myNegBaseDig raised to the power $myNegPowerDig results : $myNegExponentialRes";
echo "<br>$myBaseDig raised to the power $myNegPowerDig results : $myNegMixedExponentialRes1";
echo "<br>$myNegBaseDig raised to the power $myPowerDig results : $myNegMixedExponentialRes2";

echo "<br>------------------------------<br>";
$myBaseDig = rand(1,50);
$mySquaredNum = pow($myBaseDig,2);
$mySqrtDig = sqrt($mySquaredNum);
echo "The square root of $mySquaredNum is : $mySqrtDig";

echo "<br>------------------------------<br>";
$myRandomDecValue = lcg_value();
echo "The random decimal value between 0 and 1 is : $myRandomDecValue";

?>