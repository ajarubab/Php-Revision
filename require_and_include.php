<?php

echo "<h1>This is Require and include file.</h1>";

/**
 * require is an inbuilt function which emphasizes the use of any php file
 * and this required php file must be present there otherwise a fatal error will be given on execution.
 * include also is an inbuilt function which also emphasizes the use of any php file
 * and this included php file must be present there otherwise a warning will be given on execution.
*/

// require("./useOfVariables.php");
// require("./useOfVariables1.php");   // fatal error

for($i=0;$i<10;$i++){
    // require_once("./useOfVariables.php");

    /*
    echo "$i<br>";
    require_once("./useOfVariables1.php");  // Fatal Error
    echo "<hr>";
    */
}

//----------------------------------------------------------------

// include("./useOfVariables.php");

/*
echo "<hr>";
include("./useOfVariables1.php");   // Warning
echo "<hr>";
*/

for($i=1;$i<=10;$i++){
    include_once("./useOfVariables.php");
    
    /*
    echo "$i<br>";
    include_once("./useOfVariables1.php");  // Warning
    echo "<hr>";
    */
}

?>