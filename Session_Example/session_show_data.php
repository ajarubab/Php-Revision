<?php
if($_SESSION){
    echo "<br>This is ".$_SESSION["Username"]." from ".$_SESSION["Country"].".<br>";
} else {
    echo "<Br>No Session is Active.";
}
?>

