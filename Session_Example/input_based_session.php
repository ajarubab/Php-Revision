<!DOCTYPE html>
<html lang="en">

<head>
    <title>Session Demo</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="session_name" placeholder="Enter Session Name" /><br><br>
        <button name="button" value="Set">Set Current Session Name</button><br><br>
        <button name="button" value="Get">Get Current Session Name</button><br><br>
        <button name="button" value="Delete">Delete Current Session</button><br><br>
    </form>
</body>

</html>

<?php

session_start();

if (isset($_POST["button"])) {
    $btn = $_POST["button"];
    $sessionName = isset($_POST["session_name"]) ? $_POST["session_name"] : "";

    switch ($btn) {
        case "Set":
            if (empty($sessionName)) {
                echo "Please Enter Session Name.<br>";
            } else {
                $_SESSION["session_name"] = $sessionName;
                echo "<br>New session started with name: $sessionName<br>";
            }
            break;
        case "Get":
            if (session_status() === PHP_SESSION_NONE) {
                echo "No Active Session.<br>";
            } elseif (isset($_SESSION["session_name"]) && !empty($_SESSION["session_name"])) {
                echo "<br>The current session name is: " . $_SESSION["session_name"] . "<br>";
            } else {
                echo "Session is active but no name is set.<br>";
            }
            break;
        case "Delete":
            if (session_status() === PHP_SESSION_ACTIVE) {
                session_unset();
                session_destroy();

                if (session_status() === PHP_SESSION_NONE) {
                    echo "The last session has been ended.<br>";
                } else {
                    echo "Session was not cleared properly.<br>";
                }
            } else {
                echo "No Active Session Found.<br>";
            }
            break;
    }
}


?>