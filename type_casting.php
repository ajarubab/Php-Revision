<?php

    $a = 45;
    $b = 500;
    $c = 12.25;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>-------------------<br>";

    // type casting from int to string

    $a = (string)$a;

    echo "<br>";
    var_dump($a);

    // type casting from string to int

    $a = (int)$a;
    
    echo "<br>";
    var_dump($a);
    
    echo "<hr>";
    // type casting from int to boolean
    
    $b = (boolean)$b;
    
    echo "<br>";
    var_dump($b);
    
    // type casting from boolean to int
    
    $b = (int)$b;
    
    echo "<br>";
    var_dump($b);
    
    echo "<hr>";
    
    // type casting from string to boolean
    
    // $b = 0;
    $b = (boolean)$b;
    
    echo "<br>";
    var_dump($b);
    
    // type casting from boolean to string
    
    $b = (string)$b;
    
    echo "<br>";
    var_dump($b);
    
    echo "<hr>";
    // type casting from float to int

    $c = (int)$c;

    echo "<br>";
    var_dump($c);

    // type casting from int to float

    $c = (float)$c;

    echo "<br>";
    var_dump($c);

    echo "<hr>";
    
    // type casting from int to array
    
    $c = 15;
    $c = (array)$c;

    echo "<br>";
    var_dump($c);
    
    // type casting from array to int
    
    $c = (int)$c;

    echo "<br>";
    var_dump($c);

    echo "<hr>";
    
    // type casting from int to object
    
    $c = 15;
    $c = (object)$c;

    echo "<br>";
    var_dump($c);

?>