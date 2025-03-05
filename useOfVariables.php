<?php
    $name = "Rakesh";
    echo "The name is ".$name.".";
    
    $Age = 28;
    echo "<br>The age of ".$name." is ".$Age.".";

    $digit = 7;
    echo "<br>The value of 7 multiply 10 is ".$digit*10;
?>

<h1 style="color:red">
    <?php echo $Age." / ".$digit." = ".$Age/$digit; ?>
</h1>


<!-- -------------------------------------------------------------------------- -->
<?php
$h3_tag_color="Blue";
?>

<h3 style="color:<?php echo $h3_tag_color?>">This is First line of h3 Tag.</h3>
<h3 style="color:<?php echo $h3_tag_color?>">This is Second line of h3 Tag.</h3>
<h3 style="color:<?php echo $h3_tag_color?>">This is Third line of h3 Tag.</h3>
<h3 style="color:<?php echo $h3_tag_color?>">This is Fourth line of h3 Tag.</h3>
<h3 style="color:<?php echo $h3_tag_color?>">This is Fifth line of h3 Tag.</h3>
<h3 style="color:<?php echo $h3_tag_color?>">This is Sixth line of h3 Tag.</h3>

--------------------------------------------------------------------------
<br><br>
<?php

// revision on 25/03/2025

$x = 19;
$y = 28;
$z = $y - $x;

print "Using Open Print with third variable : $y - $x = $z";
print("<br>Using Closed Print with third variable : $y - $x = $z");
print "<br>Using Open Print without third variable: $y + $x = ". ($x+$y);
print("<br>Using Closed Print without third variable: $y + $x = ". ($x+$y));
echo "<br>Using Open Echo with third variable : ".$y." - ". $x ." = ". $z;
echo "<br>Using Open Echo without third variable : ".$y." * ". $x ." = ". ($y*$x);
echo ("<br>Using Closed Echo with third variable : ".$y." - ". $x ." = ". $z);
echo ("<br>Using Closed Echo without third variable : ".$y." * ". $x ." = ". ($y*$x));

echo "<br><br>";
$next_h1_tag_color = "Red";
echo "Next h1 tag will be in ".$next_h1_tag_color." color.";
?>

<h1 style='color:<?php echo $next_h1_tag_color?>'>
<?php
$x = 14;
$y = 25;
$z = $y * $x;
print("<br>Using Closed Print with third variable : $x * $y = $z");
print("<br>Using Closed Print without third variable : $x + $y = ".($x+$y));
echo "<br>Using Open Echo with third variable : ".$x." * ". $y ." = ". $z;
echo "<br>Using Open Echo without third variable : ".$y." - ". $x ." = ". ($y -$x);
?>
</h1>