<?php

echo "<h1>This is server side Register page.</h1>";
echo "<br><hr><br>";

$_REQUEST["Gender"] = "Male";   // inserting extra data manually appends at last of result
if($_REQUEST){
    foreach($_REQUEST as $key => $data){
        echo $key." : ".$data."<br>";
    }
}

?>