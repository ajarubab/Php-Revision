<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from `registration` where username ='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = 1;
        } else {
            $sql = "insert into `registration` (username,password) values('$username','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $success = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>SignUp Page</title>
</head>

<body>

    <?php
    if ($user) {
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> User already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    }
    if ($success) {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Signed Up successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    header('location:loginPage.php');
    }

    ?>
    <h1 class="text-center">Signup Page</h1>
    <div class="container mt-5">
        <form action="signupPage.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            <a href="loginPage.php" class="btn btn-primary w-100 mt-3">Login Instead</a>
        </form>
    </div>


</body>

</html>