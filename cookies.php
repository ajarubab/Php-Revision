<?php
    // basics of cookie  (PART-1)
    setcookie("Name","Raja",time()+60);

    if(isset($_COOKIE["Name"])){
        echo "Cookie is set for 60 seconds<br>";
        echo "current cookie is ".$_COOKIE["Name"];
    }else{
        echo "cookie is not set";
    }

    echo "<hr>";

    setcookie("Age",32,time()+240);

    if(isset($_COOKIE["Age"])){
        echo "Cookie is set for 60 seconds<br>";
        echo "current cookie is ".$_COOKIE["Age"];
    }else{
        echo "cookie is not set";
    }

    echo "<hr>";
    
    echo "<pre>";
    print_r($_COOKIE);
    echo "<hr>";
?>


<!-- <?php
    // php for form based cookie operations ( PART - 2 )
    if(isset($_POST["button"])){ 
        if($_POST["button"]== "set"){
            $val = $_POST["user"];
            if($val){
                setcookie("user",$val,time()+120);
                echo "<br>Cookie is set now.";
            }else{
                echo "<br>No Cookie value Entered.";
            }
        }
    }
    
    if(isset($_POST["button"])){ 
        if($_POST["button"]== "display"){
            if(isset($_COOKIE["user"])){
                echo "<br>Cookie name is : ".$_COOKIE["user"];
            }else {
                echo "<br>Cookie Not Found.";
            }
        }
    }
    
    if(isset($_POST["button"])){ 
        if($_POST["button"]== "delete"){
            if(isset($_COOKIE["user"])){
                setcookie("user",null,-1);
                echo "<br>Cookie removed ";
            } else {
                echo "<br>Cookie Not Found, Deletion Not Possible.";
            }
        }
    }
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie Executions</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter any keyword">
        <br><br>
        <button name="button" value="set">Set Cookies</button>
        <br><br>
        <button name="button" value="display">Display Cookies</button>
        <br><br>
        <button name="button" value="delete">Delete Cookies</button>
    </form>
</body>
</html> -->
