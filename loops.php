<!-- <?php

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


echo "<br>";
echo "<br>";

// for-each loop

    $arr = [28,56.76,null,12,23,"ram",34,45,56,7,78,'krishna',89,90,true];

    foreach($arr as $i){
        if($i==23){
            continue;
        }
        echo $i."<br>";
        if($i== 'krishna'){
            break;
        }
    }

    echo "<br>";
    echo "<br>";

    
    $arr2 = [];
    for($i=0; $i<= rand(5,15); $i++)
    {
        $arr2[$i] = rand(10,99);
    }
    echo "There are ".count($arr2)." elemnet now in the arr2.<br>";
    foreach($arr2 as $i):
        echo "number is : ".$i."<br>";
    endforeach;
?> -->

<?php

// revision on 05/03/2025

$a = 100;
while($a>=1){
    print("$a ");
    $a--;
}
echo "<br><br>";

for($b=1;$b<=100;$b+=3){
    print("$b ");
}

echo "<br><br>";
$c = 1;
do{
    print(($c*5)." ");
    $c+=3;
}while($c<=50);

echo "<br><br>";
// print(rand(5,15));

$arr = [];
for($i=1;$i<=rand(10,50);$i++){
    $arr[$i] = rand(10,99);
}
foreach($arr as $x){
    print("$x ");
}
?>