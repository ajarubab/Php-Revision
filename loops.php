<?php

// while loop

$a = 1;
while($a<=10){
    echo $a*2 . " ";
    $a+=1;
}

echo "<br>";
echo "<br>";

// for loop

for($i = 1; $i <= 10 ; $i++){
    echo 5*$i." ";
}

// generating 10 random numbers
echo "<br>";
echo "<br>";

for($i = 1; $i <= 10 ; $i++){
    echo rand(0,100)." ";
}

echo "<br>";
echo "<br>";

// nested for loop

for($i = 1; $i <= 20 ; $i++){
    for($j = 1; $j <= 10 ; $j++){
        echo $i*$j." ";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";

// do-while loop

$b = 1;
do{
    echo 15*$b." ";
    $b+=1;
}while($b<11);


?>