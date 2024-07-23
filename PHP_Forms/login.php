<?php
    echo "<h1>This is Login server side.</h1>";
    echo "<br>";
    
    echo "<hr>";
    echo "The User name is : ". $_GET["username"]."<br>";   // WILL RESULT ERROR IF NOT FORM DATA FILLIED DRIVEN
    echo "<hr>";

    if($_GET){
        echo "The username is : ".$_GET["username"];
        echo "<br>";
        echo "The userpassword is : ".$_GET["userpass"];
    }

?>