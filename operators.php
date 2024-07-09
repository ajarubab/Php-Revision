<?php
    $a = 12;
    $b = 4;
    $c = 5;

    // Arithmatic operators
    
    echo "$a + $b = ".$a+$b."<br>";
    echo "$a - $b = ".$a-$b."<br>";
    echo "$a * $b = ".$a*$b."<br>";
    echo "$a / $b = ".$a/$b."<br>";
    echo "$a % $b = ".$a%$b."<br>";
    echo "$a % $c = ".$a%$c."<br>";
    echo "$a ** $b = ".$a**$b."<br>";

    echo "<br>";
    echo "<br>";

    // Assignment Operators

    echo "<b>Initially value of \$a  is : ".$a."</b><br>";
    echo "Value of \$b  is : ".$b."<br>";
    echo "Value of \$c  is : ".$c."<br>";
    $a = $b;
    echo "After ' \$a = \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a = $b+$c;
    echo "After ' \$a = \$b + \$c ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a+=$b;
    echo "After ' \$a += \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a-=$b;
    echo "After ' \$a -= \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a*=$b;
    echo "After ' \$a *= \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a/=$b;
    echo "After ' \$a /= \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a%=$b;
    echo "After ' \$a %= \$b' <b>new value of \$a  </b>is : ".$a."<br>";
    $a*=$b;
    echo "After ' \$a *= \$b ' <b>new value of \$a  </b>is : ".$a."<br>";
    $a**=$b;
    echo "After ' \$a **= \$b ' <b>new value of \$a  </b>is : ".$a."<br>";

    echo "<br>";
    echo "<br>";

    // -------------------- Redeclaring the values ----------------

    $a = 12;
    $b = 4;
    $c = 5;
    $d = "5";
    $e = 4;
    
    echo "<b>After Redeclaring values</b><br>";
    echo "<b>value of \$a  is : ".$a."</b><br>";
    echo "<b>value of \$b  is : ".$b."</b><br>";
    echo "<b>value of \$c  is : ".$c."</b><br>";
    echo "<b>value of \$d  is : ".$d."</b><br>";
    echo "<b>value of \$e  is : ".$e."</b><br>";
    
    echo "<br>";
    
    // ------------------------------------------------------------

    // Comparision Operators

    echo "' \$a == \$b ' will results : ";
    var_dump( $a == $b );

    echo "<br>";
    echo "' \$b == \$e ' will results : ";
    var_dump( $b == $e );

    echo "<br>";
    echo "' \$a != \$b ' will results : ";
    var_dump( $a != $b );

    echo "<br>";
    echo "' \$b != \$e ' will results : ";
    var_dump( $b != $e );

    echo "<br>";
    echo "' \$b <> \$e ' will results : ";
    var_dump( $b <> $e );
    
    echo "<br>";
    echo "' \$a <> \$b ' will results : ";
    var_dump( $a <> $b );
    
    echo "<br>";
    echo "' \$a === \$b ' will results : ";
    var_dump( $a === $b );

    echo "<br>";
    echo "' \$c == \$d ' will results : ";
    var_dump( $c == $d );
    
    
    echo "<br>";
    echo "' \$c === \$d ' will results : ";
    var_dump( $c === $d );
    
    echo "<br>";
    echo "' \$c != \$d ' will results : ";
    var_dump( $c != $d );
    
    echo "<br>";
    echo "' \$c !== \$d ' will results : ";
    var_dump( $c !== $d );
    
    echo "<br>";
    echo "' \$a > \$b ' will results : ";
    var_dump( $a > $b );
    
    echo "<br>";
    echo "' \$b > \$e ' will results : ";
    var_dump( $b > $e );
    
    echo "<br>";
    echo "' \$a < \$b ' will results : ";
    var_dump( $a < $b );
    
    echo "<br>";
    echo "' \$b < \$a ' will results : ";
    var_dump( $b < $a );
    
    echo "<br>";
    echo "' \$b < \$e ' will results : ";
    var_dump( $b < $e );
    
    echo "<br>";
    echo "' \$d < \$c ' will results : ";
    var_dump( $d < $c );
    
    echo "<br>";
    echo "' \$a <= \$b ' will results : ";
    var_dump( $a <= $b );

    echo "<br>";
    echo "' \$b <= \$e ' will results : ";
    var_dump( $b <= $e );

    echo "<br>";
    echo "' \$a >= \$b ' will results : ";
    var_dump( $a >= $b );

    echo "<br>";
    echo "' \$b >= \$e ' will results : ";
    var_dump( $b >= $e );

    echo "<br>";
    echo "' \$d >= \$c ' will results : ";
    var_dump( $d >= $c );

    // spaceship operator

    echo "<br>";
    echo "' \$b <=> \$a ' will results : ";
    var_dump( $b <=> $a );

    echo "<br>";
    echo "' \$d <=> \$c ' will results : ";
    var_dump( $d <=> $c );

    echo "<br>";
    echo "' \$b <=> \$e ' will results : ";
    var_dump( $b <=> $e );

    echo "<br>";
    echo "' \$a <=> \$b ' will results : ";
    var_dump( $a <=> $b );

    echo "<br>";
    echo "<br>";

// -------------------- Redeclaring the values ----------------

    $a = 12;
    $b = 12;
    
    echo "<b>After Redeclaring values</b><br>";
    echo "<b>value of \$a  is : ".$a."</b><br>";
    echo "<b>value of \$b  is : ".$b."</b><br>";
    
    echo "<br>";
    
    // ------------------------------------------------------------
    
    // Increment and decrement Operator


    echo "on <b>++\$a</b> , the value of \$a as : ".++$a."<br>";
    echo "on next line we get the new value of \$a as : ".$a;
    
    echo "<br>";
    echo "on <b>\$a++</b> ,initially we get the value of \$a as : ".$a++."<br>";
    echo "but on next line we get the new value of \$a as : ".$a;

    echo "<br>";
    echo "<br>";
    echo "on <b>--\$b</b> , the value of \$b as : ".--$b."<br>";
    echo "on next line we get the new value of \$b as : ".$b;
    
    echo "<br>";
    echo "on <b>\$b--</b> ,initially we get the value of \$b as : ".$b--."<br>";
    echo "but on next line we get the new value of \$b as : ".$b;

    echo "<br>";
    echo "<br>";
    // ------------------------------------------------------------
    
    // String Operator

    $firstName = 'Raja ';
    $middleName = 'Kumar ';
    $lastName = 'Prasad';

    $fullName = $firstName . $middleName . $lastName;
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $middleName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo 'My Name is $fullName';
    echo "<br>";
    echo 'My Name is '.$fullName;
    
    echo "<br>";
    echo "<br>";
    $firstName = "Jai ";
    $middleName = "Shree ";
    $lastName = "Ram";

    $fullName = $firstName . $middleName . $lastName;
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $middleName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo "My Full Name is $fullName";
    echo "<br>";
    echo "Yes, My Full Name is ".$fullName;

    echo "<br>";
    $fullName.=" Jai Hanuman";
    echo $fullName;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // -------------------- Redeclaring the values ----------------

    $a = 20;
    $b = 4;
    $c = 5;
    
    echo "<b>After Redeclaring values</b><br>";
    echo "<b>value of \$a  is : ".$a."</b><br>";
    echo "<b>value of \$b  is : ".$b."</b><br>";
    echo "<b>value of \$c  is : ".$c."</b><br>";
    
    echo "<br>";
    
    // ------------------------------------------------------------

    // logical operators

    if($a <> null && $a > 5) {
        echo " \$a ki value 5 se jyada hai";
    }
    
    echo "<br>";
    if($a <> null and $a > 5) {
        echo " \$a value is greter than 5";
    }
    
    echo "<br>";
    if($a == 15 || $a > 15) {
        echo " \$a ki value 15 se jyada hai";
    }
    
    echo "<br>";
    if($a == 15 or $a > 15) {
        echo " \$a value is greater than 15";
    }
    
    echo "<br>";
    if($a == 15 or $a > 15 || $a > 25) {
        echo "Yes, \$a value is greater than 15";
    }
    
    echo "<br>";
    if($a != null and $a > 15 && $a < 25) {
        echo "Bilkul, \$a ki value 15 se jyada hai";
    }
    
    echo "<br>";
    if($a != null and $a > 15 && ($a < 25 || $a > 10)  ) {
        echo "Ji, \$a ki value 15 se jyada hai";
    }
    
    echo "<br>";
    // in xor only one condition should be true, nither both nor none
    if($a == 10 xor $b == 4) {
        echo " xor condtion met sussessfully.";
    } else {
        echo " xor condtion not met.";
    }

?>