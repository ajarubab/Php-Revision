<?php
    $var1 = 23;
    echo "The value is : ".$var1;
    echo "<br> The datatype is : <b>".gettype($var1)."</b>";
    echo "<br>The datatype of <b>".$var1."</b> is : <b>" , var_dump($var1)."</b>";
    
    echo "<br>";
    echo "<br>";

    $var2 = "Raja kumar";
    echo "The value is : ".$var2;
    echo "<br> The datatype is : <b>".gettype($var2)."</b>";
    echo "<br>The datatype of <b>".$var2."</b> is : <b>" , var_dump($var2)."</b>";

    echo "<br>";
    echo "<br>";

    $var3 = 23.34;
    echo "The value is : ".$var3;
    echo "<br> The datatype is : <b>".gettype($var3)."</b>";
    echo "<br>The datatype of <b>".$var3."</b> is : <b>" , var_dump($var3)."</b>";

    echo "<br>";
    echo "<br>";

    // $var4 = true;
    $var4 = false;
    echo "The value is : ".$var4;
    echo "<br> The datatype is : <b>".gettype($var4)."</b>";
    echo "<br>The datatype of <b>".$var4."</b> is : <b>" , var_dump($var4)."</b>";
    
    echo "<br>";
    echo "<br>";

    $var5 = null;
    echo "The value is : ".$var5;
    echo "<br> The datatype is : <b>".gettype($var5)."</b>";
    echo "<br>The datatype of <b>".$var5."</b> is : <b>" , var_dump($var5)."</b>";
    
    echo "<br>";
    echo "<br>";

    // $var6 = ['abc','def','ghi','jkl'];
    // $var6 = ["abc","def","ghi","jkl"];
    // $var6 = ['abc','@$&','ghi','123'];
    // $var6 = ["abc","@$&","ghi","123"];
    // $var6 = ['abc','@$&',"ghi","123"];
    $var6 = ['abc',12.21,"ghi",123, false, null];
    // echo "The value is : ".$var6;
    echo "The value is : ".implode(' ',$var6);
    echo "<br> The datatype is : <b>".gettype($var6)."</b>";
    // echo "<br>The datatype of <b>".$var6."</b> is : <b>" , var_dump($var6)."</b>";
    echo "<br>The datatype of <b>".implode(' ',$var6)."</b> is : <b>" , var_dump($var6)."</b>";
?>