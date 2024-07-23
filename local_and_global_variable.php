<?php

    $name = "Rajat";    // global variable
    function getName(){
        $name = "Raju"; // local variable
        echo "Local scope name value : $name";

        /* to access the outer variables in the function we can 
          * 1. use global keyword with the same named internal variable.
          * 2. can pass outer declared variable as parameter to the function and retreive the value
        */

        global $name;   // way 1
        echo "<br>Local scope name value after globlisation : $name";
        
        $name = "Mahesh";   // changing the global variable value here inside a function
        echo "<br>";
        echo "Second time Local scope name value : $name";
    }

    function getMyName($name){  // way 2
        echo "The outside name vaiable passed into the function have the value : $name";
        function innerFun(){
            $name = "Somi";
            echo "The inner Function local variable name value is : $name";
            global $name;
            echo "<br>The inner Function name value after globlisation is : $name";
        }
    }

    getName();
    echo "<br>";
    echo "<hr>";
    getMyName($name);
    echo "<br>";
    innerFun();
    echo "<br>";
    echo "Outer function name value : $name";

?>