<?php
// Steps 1 :  run fileupload.php
// Step  2 :   upload image
// Step 3 : click submit button
$targetDir ="./images";
$html   = '';
  if(is_array($_FILES))
   {
    //   try and catch
        $file_type = $_FILES['image']['type']; //returns the mimetype
        $allowed = array("image/jpeg", "image/gif", "image/png");
        if(!in_array($file_type, $allowed)) {
        $error_message = 'Only jpg, gif, and png files are allowed.';
        echo $error_message;
        }
    else{
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        $destinationPath  =  $targetDir."/".$_FILES["image"]["name"];
        if(move_uploaded_file($_FILES['image']['tmp_name'],$destinationPath)) {
        // move the file from temp location to the destination folder
        // 1 . temppath,    2. target/destination path

        // embed html in php as a string 
        //  .= concat the string
        $html .=  "<img src = $destinationPath width = 200px> ";
        $html.= "<br><a href = fileupload.php>Back </a>";
        echo $html;
        }
}
    }
}

?>