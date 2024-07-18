<?php
    // craetion of a basic function and calling that basic function

    // defining basic function
    function basicFunction(){
        echo "This is basic function.";
    }

    // calling the above function
    basicFunction();

    echo "<hr>";
    //------------------------------------------------------------------


    // function can repeat a task at given times using loops
    function jaiSiyaRam(){
        $counts = 15;
        for($i = 1 ; $i <= $counts ; $i++ ) {
            echo "Count $i : Jai Siya Ram.<br>";
        }
    }

    // calling the above function
    jaiSiyaRam();

    echo "<hr>";
    //------------------------------------------------------------------


    function heading(){
        echo "<h1>User Details</h1>";
    }
    
    function body(){
        echo "User Name : Raja<br>";
        echo "User Age : 29<br>";
        echo "User Email : ajarubab@gmail.com<br>";
        echo "User Phone : 123123123<br>";
    }

    // function can call other functions inside it
    function userDetails(){
        heading();
        body();
    }

    //calling above function
    userDetails();

    echo "<hr>";
    //------------------------------------------------------------------

    // parameterized function and its calling

    function sum($a, $b){
        return $a+$b;
    }
    function sub($a, $b){
        return $a-$b;
    }

    echo "The Summation result is : ".sum(10,20)."<br>";
    echo "The Summation result is : ".sum(10.2534,40.276537)."<br>";
    echo "The Summation result is : ".sum(40,45)."<br>";
    echo "The Subtraction result is : ".sub(80,45)."<br>";
    echo "The Subtraction result is : ".sub(40,100)."<br>";
    echo "The Subtraction result is : ".sub(40,88.2346)."<br><br>";

    function showColors($objectName,$color){
        echo "<h1 style='color: $color'> $objectName </h1>";
    }

    showColors('Apple',"red");
    showColors('Sky',"blue");
    showColors('Grass',"green");


    echo "<hr>";
    //------------------------------------------------------------------

    // use of default parameter in the function
    // we can't make leftmost parameter default if other parameters are not default

    // function getNationality($userName="ram",$country){
    function getNationality($userName,$country="India"){
        echo  "<h3>$userName is the citizen of $country.</h3>";
    }

    // getNationality('Italy'); // first(leftmost) parameter not passed, will cause too few arguments fatal error.
    getNationality('Raja'); // second parameter not passed, but it's ok.
    getNationality('Vicky','Finland');

    echo "<hr>";
    //------------------------------------------------------------------

    /*
     * Nested Function
     * we can not call the inner function in any situation if the outer function
     * ... is not called earlier outside the outer function definition.
     * if the call inner function inside the outer but the inner function is not defined
     * ...it will give error.
     * if the outer is not defined but inner is called into the outer just after defining
     * ... inner it will not give error but Result will be blank.
    */

    // outerFun();         // can be callable even not defined earlier
    function outerFun(){
        echo "This is outer function.<br>";

        // innerFun();     // fatal error : call to undefined function
        function innerFun(){
            echo "This is inner function.";
        }
        innerFun();     // now it is callable bcs already defined and outer is called
    }

    // coorect
    
    
    outerFun();
    // innerFun();
    

    /* inccorrects

    innerFun(); // can't call inner only when nested inside , fatal error : call to undefined function

    //----or------

    innerFun();     // fatal error : call to undefined function
    outerFun();

    */

    echo "<hr>";
    //------------------------------------------------------------------

    // Function as Variable and callback function

    function alpha(){
        echo "Alpha function.<br>";
    }
    
    function beta(){
        echo "Beta function.<br>";
    }

    $fun1 = "alpha";
    $fun2 = "beta";

    function gamma($x){
        $x();
        echo "Gamma function.<br>";
    }
    
    // callback function
    gamma($fun1);  // gamma function call having parameter variable which contains alpha function calling
    gamma($fun2);  // gamma function call having parameter variable which contains beta function calling

    echo "<hr>";
    //------------------------------------------------------------------

    // Basic inbuilt functions of php

    $bhajan = "Hare raam hare raam, raam raam hare hare, hare krishna hare krishna, krishna krishna hare hare";
    echo "The bhajan is ".strlen($bhajan)." characters long.";

    echo "<br>------------------<br>";

    // $vidalTestResult = true;
    $vidalTestResult = "Positive";
    var_dump($vidalTestResult);
    
    echo "<br>------------------<br>";

    echo "<br>The Date of today is <b>".date("d")."</b><br>";
    echo "Date of Today is <b>".date("j")."</b><br>";
    echo "Short form of this month is <b>".date("M")."</b><br>";
    echo "This month is <b>".date("F")."</b><br>";
    echo "This is month number <b>".date("m")."</b><br>";
    echo "Today is <b>".date("D")."</b><br>";
    echo "Today is <b>".date("l")."</b><br>";
    echo "Year of Today is <b>".date("Y")."</b><br>";
    echo "Short-Year of Today is <b>".date("y")."</b><br>";
    echo "Time is <b>".date("H:i:s")."</b><br>";        // time but don't know of where
    echo "Date is <b>".date("j-m-y")."</b><br>";
    echo date('\I\t \i\s \t\h\e jS \o\f F Y \.')."<br>";

    echo "<br>------------------<br>";

    // echo phpinfo();

    echo "<br>------------------<br>";

    $myNaam = " rajakumarprasad";
    if(is_string($myNaam)){
        echo " String hi hai myNaam variable.";
    }

    echo "<br>------------------<br>";

    $myUmr = 28.12;
    if(is_int($myUmr)){
        echo " Integer hi hai myUmr variable.";
    } else {
        echo " Integer nhi hai myUmr variable.";
    }

    echo "<br>------------------<br>";

    echo "The random number is ".rand()."<br>";
    echo "The mt_random number is ".mt_rand()."<br>";
    echo "The random number between 15 and 30 is ".rand(15,30)."<br>";
    echo "The mt_random number between 15 and 30 is ".mt_rand(15,30)."<br>";
    echo "The random floating number between 15 and 30 is ".(rand(15*10,30*10)/10)."<br>";
    echo "The mt_random floating number between 15 and 30 is ".(mt_rand(15*10,30*10)/10)."<br>";

    echo "<br>------------------<br>";

    $para = "This is a very good idea of learing, learn, write, execute and commit.";
    echo substr($para, 10)."<br>";     // displays given index to last words of the string
    echo substr($para, 0, 15)."<br>";     // displays characters between given indexs, positives are counted from left
    echo substr($para, 5, 35)."<br>";     // displays characters between given indexs, positives are counted from left
    echo substr($para, 5, -5)."<br>";     // displays characters between given indexs negatives are counted from right
    echo substr($para, -7, 15)."<br>";     // if first index is negative and other one is positive, output will be from last negative index to last index.

    echo "<br>------------------<br>";
    $bhajan = "hare raam hare raam, raam raam hare hare, hare krishna hare krishna, krishna krishna hare hare";
    echo "Bhajan me hare shabd ".substr_count($bhajan,"hare")." baar aaya hai.";  // finds the occurance of hare into the bhajan.

    echo "<br>------------------<br>";

?>