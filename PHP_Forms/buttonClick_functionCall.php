<!DOCTYPE html>
<html lang="en">
<head>
    <title>Button Click Function Call</title>
</head>
<body>
     <!-- <form action="" method="get"> -->
     <form action="" method="post">
        <button name="button" value="btn1">
            Click the button
        </button>
    </form>
</body>
</html>

<?php

if(isset($_REQUEST["button"])){
    clickEventHere();
}

function clickEventHere(){
    echo "The Button is clicked.";
}

?>