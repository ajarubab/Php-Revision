<?php

echo "<h1> This is Server side Signup page.</h1>";

echo "<hr>";
echo "The User name is : ". $_POST["username"]."<br>"; // WILL RESULT ERROR IF NOT FORM DATA FILLIED DRIVEN
echo "<hr>";
echo "<pre>";
if($_POST){
    print_r($_POST);
}


?>