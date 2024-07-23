<?php
    echo "<h1>This is server side place where uploaded file comes first.</h1>";

    echo "<br><hr><br>";

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