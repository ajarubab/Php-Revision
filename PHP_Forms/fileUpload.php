<?php
    echo "<h1>This is server side place where uploaded file comes first.</h1>";

    echo "<br><hr><br>";

    // if movr_uploaded_file results permission error run the following commands in terminal
    // sudo chmod -R 0777 /Applications/XAMPP/xamppfiles/htdocs/Php-Revision/PHP_Forms/uploads
    echo "<pre>";
    if($_FILES["fileUpload"]){
        $data = $_FILES["fileUpload"]["name"];
        $upload_Path = "./uploads/".$data;      // the place where there uploaded document will be saved/moved.
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $upload_Path)){
            echo "File Uploaded";
        }else{
            die("NO file Found to upload.");
        }
    }
?>