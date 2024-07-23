<?php

    /**
     * we have some major SUPERGLOBAL VARIABLE which can be accessed from anywhere
     * these superglobal variables are predefined and we don't need to create them manually
     * these are:
     * 
     *  $_GLOBALS
     *  $_SERVER
     *  $_REQUEST
     *  $_GET
     *  $_POST
     *  $_FILES
     *  $_COOKIE
     *  $_SESSION
     *  $_ENV
     * 
     * here we will see the use of $_GLOBALS and $_SERVER
     * 
     *  $_GLOBALS gives us all the global vaiables list 
     *  $_SERVER gives us all the server related info 
     */

     $a = 12;
     const data = "20"; // not shown by $GLOBAL as they show only variables

    // include("./function.php");
    echo "<pre>";
    print_r($GLOBALS);

    echo "<br><hr><br>";
    
    echo "<pre>";
    // print_r($_SERVER);
    echo "<br><hr><br>";
    print_r($_SERVER["REQUEST_URI"]);

?>