<?php
if (isset($_POST['file'])) {
    $filePath = $_POST['file'];
    readfile($filePath);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Reader</title>
</head>

<body>
    <?php
    $folderName = "Files";
    $filesName = scandir($folderName);
    $extraElements = array(".", "..");
    $filesName = array_diff($filesName, $extraElements);

    // Display the buttons for each file
    foreach ($filesName as $file) {
        echo "
            <form action='' method='POST'>
                <input type='hidden' name='file' value='$folderName/$file'>
                <button type='submit'>$file</button>
            </form><br>";
    }
    ?>
</body>

</html>