<?php

$targetDir ="./images";
  if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        $destinationPath  =  $targetDir."/".$_FILES["image"]["name"];
        if(move_uploaded_file($_FILES['image']['tmp_name'],$destinationPath)) {
        // move the file from temp location to the destination folder
        // 1 . temppath,    2. target/destination path
        echo "<img src = $destinationPath width = 200px> ";
        }
}
}

?>