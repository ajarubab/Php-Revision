<?php

session_start();
if(!$_SESSION['username']){
    header('location:loginPage.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>User Dashboard</title>
</head>
<body>
    <h1 class="text-center mt-5"><?php
        echo 'Welcome '.$_SESSION['username'];
    ?></h1>
    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5 ">Logout</a>
    </div>
</body>
</html>