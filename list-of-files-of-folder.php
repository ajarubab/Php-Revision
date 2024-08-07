<!DOCTYPE html>
<html lang="en">

<head>
    <title>ReadFile</title>
</head>

<body>
    <?php
    $folderName = "Files";
    $filesName = scandir($folderName);
    $extraElements = array(".", "..");
    $filesName = array_diff($filesName, $extraElements);

    foreach ($filesName as $file) {
        echo
        " <a href='Files/$file'>$file</a> " . "<br>";
    }
    ?>

</body>

</html>