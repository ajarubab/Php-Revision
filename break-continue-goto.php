<?php

// use of break statement

    $point_of_stop_execution = 70;
    for($i=1;$i<=20;$i++){
        $num =  rand(50,100);
        if($num == $point_of_stop_execution){
            echo " Finally got 70 on iteration $i";
            break;
        }else {
            echo " Random number is : ";
        }
        echo $num;
        echo "<br>";
    }
    
echo "<br>";
echo "<br>";

// use of continue statement

$ignore_digit = 7;
for($j=0;$j<=10;$j++){
    if($j == $ignore_digit || $j == 4 ){
        continue;
    }
    echo $j;
    echo "<br>";
}
    
echo "<br>";
echo "<br>";


// goto statement

for($a =0; $a<10; $a++){
    if($a == 5){
        goto jumpPoint;
    }
}

echo "This is echo statement 1";
echo "This is echo statement 2";
echo "This is echo statement 3";
echo "This is echo statement 4";

jumpPoint:

echo "This is echo statement 5";

?>