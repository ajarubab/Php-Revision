<?php

// $food = array("roti","sabji","daal","chaval","saag","meat","machhli","anda","doodh","dahi","paneer","daal","meat","55");
// echo "There are ".sizeof($food)." food items.<br>";
// echo "Hamare pass ".count($food)." food item hai.<br>";

// echo "<pre>";
// echo "Hamare pass daal ka fist occurance index ".array_search("daal", $food)." pr hai.<br>";

// echo "<pre>";
// print_r(array_count_values($food));     // tells the frequency count of each array element

/*
if(in_array(55,$food)){                 // only value checking mode
// if(in_array(55,$food,true)){        // strict value and datatype checking mode
    echo " 55 hai bhojan me.";
}else {
    echo "55 nahi hai bojan me.";
}
*/

/*
$multiArr = array(
    "banana",
    array("ab", 34, 'cd'),
    '467',
    1001
);

// if (in_array(467, $multiArr, true)) {                        // strict value and datatype checking mode, buydefault 3rd option is false
if (in_array(array("ab", 34, 'cd'), $multiArr)) {               // only value checking mode
    echo " Found in multiArr at index ".array_search(array("ab", 34, 'cd'), $multiArr)."<br>";
    // echo " Found in multiArr at index ".array_search(467, $multiArr)."<br>";
} else {
    echo "Not Found in multiArr";
}
*/

/*
$food = array(
    'fruit' => array("apple","mango","banana","date"),
    'vegitable' => array("potato","tomato","bringle","peas")
);

echo "There are ".sizeof($food)." types of food items.<br>";
echo "Hamare pass ".count($food)." types ke food item hai.<br>";

echo "Hamare pass total ".count($food, 1)." food item hai.<br>";        // it counts the array name also as array element
echo "<hr>";
echo "Hamare pass ".count($food["fruit"],1)." types ke fruits hai.<br>";
echo "Hamare pass ".count($food["vegitable"],1)." types ke vegetables hai.<br>";
echo "<hr>";
echo "Hamare pass ".sizeof($food["fruit"],1)." types ke fruits hai.<br>";
echo "Hamare pass ".sizeof($food["vegitable"],1)." types ke vegetables hai.<br>";
*/

/*
$assoArr = array(
    "Name" => "Rajat",
    "Age" => 37,
    "City"  => 'Delhi',
    "Gender" => "Male"
);

echo array_search("Delhi",$assoArr);    // return "City" because in case of associated array array_search function returns the Key name only
echo array_search("City",$assoArr);     // return NOTHING because in case of associated array array_search function returns the Key name only
*/

/*
$oldArr = ["one", 22, 'Horse', True, 34.67];
$newArr1 = ["two", 42, 'Goat', false, 54.17];
$newArr2 = ["apple", "mango", "banana", "grapes"];
$newArr3 = ["banana", "grapes", "date"];
$newArr4 = ["Lichi", "Orange"];
$newArr5 = [456];
$newArr6 = ["a" => "coconut", 3 => "Pineapple"];        // causes index 3 value to be pineapple if array_replace used
$newArr7 = [3 => "Pineapple", "a" => "nariyal"];

// $resArr = array_replace($oldArr,$newArr1);       // array_replace always creates new array hence no change found in base array
// $resArr = array_replace($oldArr,$newArr2);
// $resArr = array_replace($oldArr,$newArr3);
// $resArr = array_replace($oldArr, $newArr3);
// $resArr = array_replace($oldArr, $newArr3, $newArr4);
// $resArr = array_replace($oldArr, $newArr3, $newArr4, $newArr5);        // replacement occurs from last argument to first argument
$resArr = array_replace($oldArr, $newArr7);
echo "<pre>";
print_r($resArr);
*/

/*
$arrOne = array(
    "first" => array("Apple","Mango","Banana"),
    "Second" => array("Potato","Tomato","Peas","Bringle","Onion")
);
$arrTwo = array(
    "first" => array("Seb","Aam"),
    "Second" => array("Aalu","Peas","Baigan")
);

$newArr = array_replace_recursive($arrOne,$arrTwo);
echo "<pre>";
print_r($newArr);
*/

/*
$food = array("roti","sabji","daal","chaval","saag","meat","machhli","anda","doodh","dahi","paneer","daal","meat","55");
echo "<pre>";
print_r($food);

array_pop($food);
echo "<pre>";
print_r($food);
array_push($food,"rayta");
echo "<pre>";
print_r($food);
array_push($food,"gulabjamun","salad");
echo "<pre>";
print_r($food);
*/

/*
$empName = ["Ram","Naresh","Sulekha"];
array_unshift($empName,"Neha");
echo "<pre>";
print_r($empName);
array_unshift($empName,"427814","jgq8gqbj",32876587);
echo "<pre>";
print_r($empName);
array_shift($empName);
echo "<pre>";
print_r($empName);
array_shift($empName);
echo "<pre>";
print_r($empName);
array_shift($empName);
echo "<pre>";
print_r($empName);
*/

/*

$primaryColor = ["Red","Green","Blue"];
$otherColor = ["pink","golden","silver"];
$moreColor = ["Brown","orange","yellow","white","black"];

$colorName = array_merge($primaryColor,$otherColor);
echo "<pre>";
print_r($colorName);
echo "<hr>";
$colorName = array_merge($primaryColor,$moreColor,$otherColor);
echo "<pre>";
print_r($colorName);

$assoArr1 = ["a" => "Purple", "b" => "Cyan", "c" => "Peach"];
echo "<hr>";
$colorName = array_merge($colorName,$assoArr1);
echo "<pre>";
print_r($colorName);

// $assoArr2 = ["d" => "Magenta", "e" => "Saffron","b" => "Olive", 13, 11.23];    // if same key, last key-value will replace first one
$assoArr2 = ["d" => "Magenta", "e" => "Saffron","b" => array(
    "fruits" => ['apple','mango','banana']
)];    // if same key, last key-value will replace first one
echo "<hr>";
$colorName = array_merge($assoArr1,$assoArr2);
// $colorName = $assoArr1 + $assoArr2;     // by this way, if key are same, first key-value pair will be shown
$colorName = array_merge_recursive($assoArr1,$assoArr2);    // if key are same , new internal array with both values is formed.
echo "<pre>";
print_r($colorName);

$personName = ["Rajat","Sahil","Mohit","Rajesh"];
$personAge = array(12,23,34,45);
echo "<hr>";

// To make two indexed array as one associative array
$personArr = array_combine($personName,$personAge);     // can be used only when each array have same no. of element
echo "<pre>";
print_r($personArr);

*/

/*
$digits = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$negDigits = array(-9, -8, -7, -6, -5, -4, -3, -2, -1);

$newDig1 = array_slice($digits, 3);     // new array from given index to last element rightwards of the array
$newDig2 = array_slice($digits, 1, 5);  // new array from first argument index to last argument index rightwards of array
$newDig3 = array_slice($negDigits, -4);  // new array from given index to last element rightwards of the array
$newDig4 = array_slice($negDigits, -7, 5);  // new array from -7 (including itself) to next 5 elements  rightwards of the array
$newDig5 = array_slice($negDigits, -7, -2);  // new array from -7 (including itself) to next (7-2 = 5 ) elements rightwards of the array

// to preserve the old index i new array , we can use fourth argument true as follows
$newDig6 = array_slice($negDigits, -7, -2, true);


echo "<pre>";
print_r($newDig1);
echo "<pre>";
print_r($newDig2);
echo "<pre>";
print_r($newDig3);
echo "<pre>";
print_r($newDig4);
echo "<pre>";
print_r($newDig5);
echo "<pre>";
print_r($newDig6);

$moreArr = array("a" => "apple", "b" => "ball", "22" => "cat", "d" => "dog");
$newDig7 = array_slice($moreArr, 0, 4); // from index 0 including get next 4 elements
echo "<pre>";
print_r($newDig7);
$newDig7 = array_slice($moreArr, 0, 4, true);        // it preserves key value
echo "<pre>";
print_r($newDig7);

*/

/*
$arrDig = [1, 2, 3, 6, 7, 8, 9];
$midVal = [4,5];
$insVal = ['a', 'b','c'];

echo "<pre>";
print_r($arrDig);
// array_splice function not creates a new array but changes within the array
// array_splice($arrDig,3); // removes all elements except first 3 elements
// echo "<pre>";
// print_r($arrDig);
// array_splice($arrDig,3, 2); // removes next 2 elements after index 3 element only and put the rest in same array
// echo "<pre>";
// print_r($arrDig);
// array_splice($arrDig, 1, -2); // start from 1st_index_value(included) till -2_index_value(excluded) and gives new array
// echo "<pre>";
// print_r($arrDig);

// array_splice($arrDig,0,3,$insVal);      // replaces 3 elements of insVal array starting from 0th in arrDig array
// echo "<pre>";
// print_r($arrDig);
// array_splice($arrDig,2,count($arrDig),$insVal);      // replaces all elements of insVal array starting from 2nd Index in arrDig array
// echo "<pre>";
// print_r($arrDig);

// insertion of other array element at desired place using splice function
// array_splice($arrDig,0,0,$midVal);      // replaces 0 elements of arrDig array starting from 0th Index in arrDig array and put midVal array value afterwards then again remaining arrDig values
// array_splice($arrDig,3,0,$midVal);      // replaces 0 elements of arrDig array starting from 3rd Index in arrDig array and put midVal array value afterwards then again remaining arrDig values
array_splice($arrDig,count($arrDig),0,$midVal);      // replaces 0 elements of arrDig array starting from last Index in arrDig array and put midVal array value afterwards then again remaining arrDig values
echo "<pre>";
print_r($arrDig);
*/

/*
$empData = array(
    "Name" => "rajat thakur",
    "Age"  => 36,
    "City" => "Delhi",
    "Post"  => "SDE 2"
);

$newArray = array_keys($empData);
echo "<pre>";
print_r($newArray);
echo "<br><hr>";
$newArray = array_key_first($empData);
echo "<pre>";
print_r($newArray);
echo "<br><hr>";
$newArray = array_key_last($empData);
echo "<pre>";
print_r($newArray);
echo "<br><hr>";

// if (array_key_exists("Age", $empData)) {
if (key_exists("Age", $empData)) {
    echo "Key Found in array.";
} else {
    echo "Key not found in the array.";
}
echo "<br><hr>";

*/

/*
$a1 = array(
    "a" => "apple",
    "b" => "banana",
    "c" => "cheeku",
    "d" => "pear"
);
$a2 = array(
    "j" => "potato",
    "k" => "tomato",
    "l" => "peas",
    "m" => "mango",
    "b" => "banana",
    "d" => "cabbage",
    "a" => "apple"
);
$a3 = array(
    "p" => "coconut",
    "q" => "apple",
    "b" => "banana",
    "r" => "potato"
);

$commVal = array_intersect($a1,$a2);        // gets common VALUE: case sensitive
// $commVal = array_intersect($a1,$a2,$a3);        // gets common VALUE: case sensitive
echo "<pre>";
print_r($commVal);
$commKey = array_intersect_key($a1,$a2);        // gets common KEY
// $commKey = array_intersect_key($a1,$a2,$a3);        // gets common KEY
echo "<pre>";
print_r($commKey);
// $commKeyVal = array_intersect_assoc($a1,$a2);        // gets common KEY-VALUE PAIR
// $commKeyVal = array_intersect_assoc($a1,$a2);        // gets common KEY
$commKeyVal = array_intersect_assoc($a1,$a2,$a3);        // gets common KEY
echo "<pre>";
print_r($commKeyVal);




function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)?1:-1;
}

$userDefCommKeyVal1 = array_intersect_uassoc($a1,$a2,"compare");    // user-defined function based common KEY-VALUE fetching
echo "<hr>";
echo "<pre>";
print_r($userDefCommKeyVal1);
echo "<hr>";

$userDefCommKeyVal2 = array_uintersect_assoc($a1,$a2,"compare");    // user-defined function based common KEY-VALUE fetching
echo "<pre>";
print_r($userDefCommKeyVal2);
echo "<hr>";

$userDefCommKeyVal3 = array_intersect_uassoc($a1,$a2,"strcasecmp");     // strcasecmp is an inbuilt function to compare case 
echo "<pre>";
print_r($userDefCommKeyVal3);
echo "<hr>";

$userDefCommKey2 = array_intersect_ukey($a1,$a2,"compare"); // user-defined function based common KEYS fetching
echo "<pre>";
print_r($userDefCommKey2);
echo "<hr>";

$userDefCommVal2 = array_uintersect($a1,$a2,"compare"); // user-defined function based common VALUES fetching
echo "<pre>";
print_r($userDefCommVal2);
echo "<hr>";

$userDefCommKeyVal2 = array_uintersect_uassoc($a1,$a2,"compare","compareVal"); // user-defined function based common KEY and VALUE fetching

function compareVal($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)?1:-1;
}

echo "<pre>";
print_r($userDefCommKeyVal2);
echo "<hr>";

*/
/*

$b1 = ["a" => "red","b" => "green", "c" => "blue", "d" => "yellow"];
$b2 = ["a" => "red","p" => "yellow", "m" => "black", "b" => "pink"];
$b3 = ["p" => "black","j" => "red","d" => "yellow", "k" => "brown", "m" => "blue"];


// $resultArr = array_diff($b1,$b2);
// $resultArr = array_diff($b2,$b3);
// $resultArr = array_diff($b1,$b3);
$resultArr = array_diff($b1,$b2,$b3);
echo "<pre>";
print_r($resultArr);
echo "<hr>";

// $diffKey = array_diff_key($b1,$b2);
// $diffKey = array_diff_key($b2,$b3);
// $diffKey = array_diff_key($b1,$b3);
$diffKey = array_diff_key($b1,$b2,$b3);
echo "<pre>";
print_r($diffKey);
echo "<hr>";

// $diffKeyVal = array_diff_assoc($b1,$b2);
// $diffKeyVal = array_diff_assoc($b2,$b3);
// $diffKeyVal = array_diff_assoc($b1,$b3);
$diffKeyVal = array_diff_assoc($b1,$b2,$b3);
echo "<pre>";
print_r($diffKeyVal);
echo "<hr>";

function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)?1:-1;
}


// $diffKeyVal1 = array_diff_uassoc($b1,$b2,"compare");
// $diffKeyVal1 = array_diff_uassoc($b2,$b3,"compare");
$diffKeyVal1 = array_diff_uassoc($b1,$b3,"compare");
echo "<pre>";
print_r($diffKeyVal1);
echo "<hr>";

// $diffKeyVal2 = array_udiff_assoc($b1,$b2,"compare");
// $diffKeyVal2 = array_udiff_assoc($b2,$b3,"compare");
$diffKeyVal2 = array_udiff_assoc($b1,$b3,"compare");
echo "<pre>";
print_r($diffKeyVal2);
echo "<hr>";

// $diffKey3 = array_diff_ukey($b2,$b3,"compare");
// $diffKey3 = array_diff_ukey($b1,$b3,"compare");
$diffKey3 = array_diff_ukey($b1,$b2,"compare");
echo "<pre>";
print_r($diffKey3);
echo "<hr>";

// $diffVal4 = array_udiff($b2,$b3,"compare");
// $diffVal4 = array_udiff($b1,$b3,"compare");
$diffVal4 = array_udiff($b1,$b2,"compare");
echo "<pre>";
print_r($diffVal4);
echo "<hr>";

function compareVal($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)?1:-1;
}

// $diffKeyVal3 = array_udiff_uassoc($b1,$b2,"compare","compareVal");
// $diffKeyVal3 = array_udiff_uassoc($b2,$b3,"compare","compareVal");
$diffKeyVal3 = array_udiff_uassoc($b1,$b3,"compare","compareVal");
echo "<pre>";
print_r($diffKeyVal3);
echo "<hr>";

*/

/*
$assocArr = array(
    "Name" => "Rajat",
    "Class" => 12,
    "Age" => 18,
    "Section" => "B",
    "Batch" => "2013",
    "Rank" => 2013
);

$onlyVal = array_values($assocArr);
echo "<pre>";
print_r($onlyVal);

$dupData = [1,2,1,3,4,1,5,6,1,3,7,8,4,6,8,3,9,5,4,0,5];

$uniData = array_unique($assocArr);
$uniData2 = array_unique($dupData);
echo "<pre>";
print_r($uniData);
echo "<pre>";
print_r($uniData2);

*/
/*
$multiAssocArr = array(
    array(
        "Name" => "Rajat",
        "Class" => 12,
        "Age" => 18,
        "Section" => "B",
        "Batch" => "2013",
        "Rank" => 2013
    ),
    array(
        "Name" => "Raju",
        "Class" => 12,
        "Age" => 17,
        "Section" => "C",
        "Batch" => "2012",
        "Rank" => 12013
    ),
    array(
        "Name" => "Rajan",
        "Class" => 12,
        "Age" => 19,
        "Section" => "B",
        "Batch" => "2015",
        "Rank" => 11013
    ),
    array(
        "Name" => "Rajesh",
        "Class" => 12,
        "Age" => 20,
        "Section" => "A",
        "Batch" => "2014",
        "Rank" => 20013
    )
);

$namesOnlyAssocArray = array_column($multiAssocArr,"Name");
$batchNameAssocArray = array_column($multiAssocArr,"Name","Batch");

echo "<pre>";
print_r($namesOnlyAssocArray);

echo "<pre>";
print_r($batchNameAssocArray);

$bhojan = array("roti","sabji","daal","chaval","saag","meat","machhli","anda","doodh","dahi","paneer","daal","meat","55");
$bhojanGroup = array_chunk($bhojan,rand(1,4));
$assocGroup = array_chunk($multiAssocArr,rand(1,4));

echo "<pre>";
print_r($bhojanGroup);

echo "<pre>";
print_r($assocGroup);
*/

/*
$myEmpData = array(
    "Name" => "rajat thakur",
    "City" => "Delhi",
    "Post"  => "SDE 2",
    "Section" => "A",
    "Batch" => "2014",
);

$swapKeyVal = array_flip($myEmpData);
echo "<pre>";
print_r($swapKeyVal);

$chngKeyCase = array_change_key_case($myEmpData);
echo "<pre>";
print_r($chngKeyCase);
$chngKeyCase = array_change_key_case($myEmpData, CASE_UPPER);
echo "<pre>";
print_r($chngKeyCase);
$chngKeyCase = array_change_key_case($myEmpData, CASE_LOWER);
echo "<pre>";
print_r($chngKeyCase);
*/

/*
$randomDigits = [1,0.2,1,3,4,1.7,5,6,1,3.25,7,8,4,6,8,3,9.67,5,4,5];
$randomAssocDigits = ["a"=>12.23,"b"=>23.34,"c"=>25];

$sumOfRandomDigits = array_sum($randomDigits);
$sumOfRandomAssocVals = array_sum($randomAssocDigits);
echo "<br><hr><br>";
echo "The sum of index array elements are : ".$sumOfRandomDigits;
echo "<br><hr><br>";
echo "The sum of associative array values are : ".$sumOfRandomAssocVals;
echo "<br><hr><br>";

$productOfRandomDigits = array_product($randomDigits);
$productOfRandomAssocVals = array_product($randomAssocDigits);
echo "The product of array elements are : ".$productOfRandomDigits;
echo "<br><hr><br>";
echo "The sum of associative array values are : ".$productOfRandomAssocVals;
echo "<br><hr><br>";

$singleRandomElement = array_rand($randomDigits);
$multipleRandomElement = array_rand($randomDigits, 3);

$singleRandomKey = array_rand($randomAssocDigits);
$multipleRandomKey = array_rand($randomAssocDigits, 2);

echo "<pre>";
echo $singleRandomElement;
echo "</pre>";

echo "<br><hr><br>";
echo "<pre>";
print_r($multipleRandomElement);
echo "</pre>";

echo "<br><hr><br>";

echo "<pre>";
print_r($singleRandomKey);
echo "</pre>";

echo "<br><hr><br>";
echo "<pre>";
print_r($multipleRandomKey);
echo "</pre>";

echo "<br><hr><br>";


$bhojanArray = array("roti","sabji","daal","chaval","saag","meat","machhli","anda","doodh","dahi","paneer");

echo "<br>Before Suffling  Bhojan Array Elements<br>";
echo "<pre>";
foreach($bhojanArray as $item){
    echo $item."<br>";
}
echo "</pre>";
shuffle($bhojanArray);

echo "<br><hr>";
echo "<br>After Suffling Bhojan Array Elements<br>";
echo "<pre>";
foreach($bhojanArray as $item){
    echo $item."<br>";
}
echo "</pre>";

echo "<br><hr>";

$singleRandomBhojanIndex = array_rand($bhojanArray);
$multipleRandomBhojan = array_rand($bhojanArray, 3);

echo "<pre>";
echo $bhojanArray[$singleRandomBhojanIndex];
echo "</pre>";

echo "<hr>";
echo "<pre>";
foreach($multipleRandomBhojan as $item){
    echo $bhojanArray[$item]."<br>";
}
echo "</pre>";

*/

/*

$a4 = ["CS","IT","Mech","Civil","Ins"];

$reveredBranch = array_fill_keys($a4,"Branch");

echo "<pre>";
print_r($reveredBranch);

$a5 = array_fill(1,10,"Jai Siyaram");
$a6 = array_fill(5,5,"Jai Shree Radhe");
$a7 = array_fill(-2,6,"Jai Shree Krishna");

echo "<pre>";
print_r($a5);

echo "<pre>";
print_r($a6);

echo "<pre>";
print_r($a7);
*/

/*

$empDataMore = array(
    "Name" => "rajat thakur",
    "City" => "Delhi",
    "Post"  => "SDE 2",
    "Section" => "A",
    "Batch" => "2014",
);
$myAssocArr = array(
    "A" => "Apple",
    "B" => "Ball",
    "C" => "Cat",
    "D" => "Dog",
);

array_walk($myAssocArr, "show", "For");

function show($v, $k, $p){
    echo "$k $p $v<br>";
}

echo "<br><hr><br>";
$myArr = array($empDataMore,$myAssocArr);

array_walk_recursive($myArr,"show","is");

echo "<hr>";

$newIndexArr = [];
$newIndexArrSize = rand(5,11);

for($i=0;$i<$newIndexArrSize;$i++){
    $newIndexArr[$i] = rand(1,10);
}

echo "<pre>";
print_r($newIndexArr);

function mapping($n){
    return $n * $n;
}

$newMappedArr = array_map("mapping", $newIndexArr);
echo "<pre>";
print_r($newMappedArr);

function combining($a,$b){
    return "Square of $a is $b<br>";
    // return [$a => $b];
}
// $actualArray = array_map("combining",$newIndexArr, $newMappedArr);
$actualArray = array_map(null,$newIndexArr, $newMappedArr);
echo "<pre>";
print_r($actualArray);


function upperCaseValue($val){
    return strtoupper($val);
}
$actualAssocArray = array_map("upperCaseValue",$myAssocArr);
echo "<pre>";
print_r($actualAssocArray);

*/

/*
$route = ["Delhi","Lucknow","Prayagraj","Siwan","Chhapara","Patna"];
$myNums = [1,2,3,4,5,6];

$tripRoute = array_reduce($route,"myfunc","Route");
$multiPlicationOfNums = array_reduce($myNums,"multiOfNums",1);

function myfunc($ini,$place){
    return "$ini - $place";
}

function multiOfNums($in,$num){
    $in *= $num;
    return $in;
}

echo "<pre>";
print_r($tripRoute);

echo "<pre>";
echo "The multiplication result of array elements is : $multiPlicationOfNums";

*/
/*
$pkArr = ["Peeku","Neha","Karishma","Pooja","Soniya","Manvi"];
$exArr = ["d" => "Neha","e" => "Pooja","a" => "Karishma","c" => "Peeku","b" => "sonam"];


$newIndexArr = [];
$newIndexArrSize = rand(5,8);

for($i=0;$i<$newIndexArrSize;$i++){
    $newIndexArr[$i] = rand(1,10);
}

echo "<br>Before<br>";
echo "<pre>";
print_r($newIndexArr);
echo "<pre>";
print_r($exArr);

// sort($pkArr);
// sort($newIndexArr);
// sort($exArr);
// echo "<br>After sort<br>";
// echo "<pre>";
// print_r($newIndexArr);
// print_r($exArr);

// rsort($pkArr);
// rsort($newIndexArr);
// rsort($exArr);
// echo "<br>After reverse sort<br>";
// echo "<pre>";
// print_r($newIndexArr);
// print_r($exArr);

// asort($exArr);                          // value's character based sorting of associative array
// echo "<br>After associative sort<br>";
// echo "<pre>";
// print_r($exArr);

// arsort($exArr);                             // value's character based reverse sorting of associative array
// echo "<br>After associative reverse sort<br>";
// echo "<pre>";
// print_r($exArr);

// ksort($exArr);      // key based sorting of associative aaray
// echo "<br>After associative key sort<br>";
// echo "<pre>";
// print_r($exArr);

krsort($exArr);         // key based reverse sorting of associative aaray
echo "<br>After associative key reverse sort<br>";
echo "<pre>";
print_r($exArr);
*/
/*
$imgArr = ["img22.png","img13.jpeg","Img07.png","img11.jpg","img18.png"];

echo "<br>Before sort<br>";
echo "<pre>";
print_r($imgArr);

$reversed_array = array_reverse($imgArr);       // Reverses the Element names to present index of the actual array
echo "<br>After array reverse sort<br>";
echo "<pre>";
print_r($reversed_array);

sort($imgArr);              // shorts the element based on the ASCII value of the Characters of elements
echo "<br>After sort<br>";
echo "<pre>";
print_r($imgArr);

natcasesort($imgArr);       // Also shorts the element based on the ASCII value of the Characters
echo "<br>After natural sort<br>";
echo "<pre>";
print_r($imgArr);


$fruits = ["guava","cherry","coconut"];
$veggies = ["tomato","chili","potato"];

array_multisort($fruits,$veggies);  // works if argument array contains same no. of elemnts

echo "<hr>";
echo "<pre>";
print_r($fruits);
echo "<pre>";
print_r($veggies);      // some irregularities here, sorts the second array according to the first array sorting index hence not reliable
*/

/*
$places = ["Delhi","Lucknow","Prayagraj","Siwan","Chhapara","Patna"];

echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";
next($places);
echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";
next($places);
echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";
end($places);
echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";
prev($places);
echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";
reset($places);
echo "Current key : ".key($places)." || Current value : ".current($places)." || Current position value : ".pos($places)."<br>";


$abcd = array(11,22,33,44);
list($first,,$third,$fourth) = $abcd;    // aasigns respective index value to respective no. of argument names

echo "<br><hr><br>";

echo "value of fourth value : $fourth"."<br>"; 
// echo "value of second value : $second"."<br>"; 
echo "value of first value : $first"."<br>"; 
echo "value of third value : $third"."<br>"; 


$empDetail = array(
    0 => "Rajat thakur",
    1 => "Delhi",
    2  => "SDE 2",
    3 => "A",
    4 => "2014",
);

list($Name,$City,$Post,$Section,$Batch) = $empDetail;   // works only with numeric keys of associative array

echo "<br><hr><br>";

echo "The City of the Employee is : ". $City. "<br>";
echo "The Section of the Employee is : ". $Section. "<br>";
echo "The Batch of the Employee is : ". $Batch. "<br>";
echo "The Name of the Employee is : ". $Name. "<br>";
echo "The Post of the Employee is : ". $Post. "<br>";

list($a[1],$a[4],$a[3],$a[2],$a[0]) = $empDetail;   // storing the selected elements for selected index values and making new array
echo "<br><hr><br>";

echo "<pre>";
print_r($a);
// echo "<br><hr><br>";
// foreach($a as $item){
//     echo $item."<br>";
// }

*/


$A = "Avacado";
$myAssociativeArr = array(
    "A" => "Apple",
    "B" => "Ball",
    "C" => "Cat",
    "D" => "Dog",
);

// extract($myAssociativeArr);
// echo "The value of A is : $A <br>";
// echo "The value of C is : $C <br>";
// echo "The value of D is : $D <br>";
// echo "The value of B is : $B <br>";

// extract($myAssociativeArr,EXTR_SKIP);
// echo "The value of A is : $A <br>";
// echo "The value of C is : $C <br>";
// echo "The value of D is : $D <br>";
// echo "The value of B is : $B <br>";

// extract($myAssociativeArr,EXTR_PREFIX_SAME,"fal");
// echo "The value of A is : $A <br>";
// echo "The value of B is : $B <br>";
// echo "The value of D is : $D <br>";
// echo "The value of C is : $C <br>";
// echo "The value of fal_A is : $fal_A <br>";

extract($myAssociativeArr,EXTR_PREFIX_ALL,"fal");
echo "The value of A is : $A <br>";
// echo "The value of B is : $B <br>";
// echo "The value of D is : $D <br>";
// echo "The value of C is : $C <br>";
echo "The value of fal_A is : $fal_A <br>";
echo "The value of fal_B is : $fal_B <br>";
echo "The value of fal_D is : $fal_D <br>";
echo "The value of fal_C is : $fal_C <br>";

echo "<br><hr><br>";


$a1 = "First Apple";
$a2 = "Second Apple";
$a3 = "Third Apple";
$a4 = "Fourth Apple";
$a5 = "Fifth Apple";

$newAlpArr = compact("a3","a1","a2");      // changes vaiablename into key and values to value to return new associative array

echo "<pre>";
print_r($newAlpArr);


$extra = ["a4","a5"];
$newAlpArr = compact("a2","a1","a3",$extra);      // changes vaiablename into key and values to value to return new associative array
echo "<br><hr><br>";
echo "<pre>";
print_r($newAlpArr);

echo "<br><hr><br>";
// print_r(range(5,10));     // return an array having element value from 0 to 10
// print_r(range("A","K"));     // return an array having element value from A to K
// print_r(range("A","K",2));     // return an array having element value from A to K having common difference of 2
// print_r(range("A","m",3));     // return an array having element value from A to m
// print_r(range("a","M"));     // return an array having element value from a to M , SO it can traverse and print reverse ASCII value also
// print_r(range("a","A",4));     // return an array having element value from a to A , SO it can traverse and print reverse ASCII value also
// print_r(range(0,10,2));     // return an array having element value from 0 to 10 having common difference of 2
// print_r(range(10,100,13));  // return an array having element value from 10 to 100 having common difference of 13

foreach(range(0, rand(0,99),5) as $ele){
    echo "$ele<br>";
}
