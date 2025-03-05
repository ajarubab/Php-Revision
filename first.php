<?php
    echo "Hello world";
    echo "</br>Let's Revise Php.";
    echo "<h1>This is h1 tag inside echo of php tag.</h1>";
    echo "<h1 style='color:red'>This is h1 tag with some css inside echo of php tag.</h1>";
?>
<?php
    echo("This is echo function.");
    echo("<h2>This is echo function in h2 size.</h2>");
    echo("<h2 style='background-color:aqua'>This is echo function in h2 size with some css.</h2>");
?>
<?php
    print "Hello guys";
    print "<br>How are you?";
    print "<h1>use of h3 tag within double quotes of print </h3>";
    print "<h1 style='border:5px solid red'>use of h3 tag within double quotes of print with some css</h3>";
    print("this is print function of php");
    print("<br>this is print function of php with br line break html tag");
    print("<h3>this is print function of php in h3 size</h3>");
    print("<h4 style='text-decoration: underline 5px red;'>this is print function of php in h4 size with some css</h4>");


    if($_SESSION){
        echo "The Session is Still running.<br>";
        echo "<br>This is ".$_SESSION["Username"]." from ".$_SESSION["Country"].".<br>";
    } else {
        echo "<Br>No Session is Active.";
    }


?>
<?php
// Revision on 05/03/2025
echo "Hello world<br>";
echo ("Hello Everyone");
echo "<h1>Hello All</h1>";
echo "<h1 style='color:Green'>Har Har Mahadev</h1>";
echo ("<h1>Radhe Radhe</h1>");
echo ("<h1 style='color:orange'>Jai siya ram</h1>");
echo "<h2 style='background-color:Aqua;width:100px;border: 3px solid red;text-align:center'>Om Namah Shivay</h2>";
echo "<br><br>";
print "Hi<br>";
print "<h1>Namaste</h1>";
print "<h1 style='border: 4px dotted blue; width:fit-content'>Namaste Bharat</h1>";
print("Hi all");
print("<h1>This is line under print</h1>");
print("<h1 style='color:Blue'>This is line under print with some styling</h1>");
?>
