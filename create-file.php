<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Creation</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="fileName" placeholder="Enter File Name" /><br><br>
        <textarea name="Content"></textarea><br><br>
        <button type="submit">Create File</button>
    </form>
</body>

</html>

<?php


if (isset($_POST['fileName'])) {
    $fileName = "Files/" . $_POST['fileName'];
    $content = $_POST["Content"];
    $file = fopen($fileName, "w") or die("Unable to create file.<br>");
    echo "<br><br>File Created in Write Mode.<br>";
    fwrite($file, $content);
    echo "Content written into the file successfully.<br>";
    fclose($file);
    echo "File Closed Successfully<br>";
}


?>