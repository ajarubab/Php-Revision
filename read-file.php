<!DOCTYPE html>
<html lang="en">

<head>
    <title>Read File</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile" /> <br><br>
        <button>Read</button>
    </form>
</body>

</html>

<?php
if (isset($_FILES["myFile"])) {
    $fileName = $_FILES["myFile"]["tmp_name"];
    $myFile = fopen($fileName, "r") or die("Unable to Open the file.");
    echo "<br>";
    echo fread($myFile, filesize($fileName));
}
?>