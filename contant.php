<?php
    const name = "Raja kumar prasad";   // way 1 of constant declaration
    define("NAME","Shree Ram");         // way 2 of constant declaration
    
    // we can't use both way for same contant
    // we cant use either of ways on double same-same declaration
    // we can't reassign values in both pre-declared constants
    // name and NAME are different due to casing of letters
    
    echo name;
    echo NAME;

?>