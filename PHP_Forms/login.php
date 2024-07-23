<?php
    echo "<h1>This is Login server side.</h1>";
    echo "<br>";
    if($_GET){
        echo "The username is : ".$_GET["username"];
        echo "<br>";
        echo "The userpassword is : ".$_GET["userpass"];
    }

?>