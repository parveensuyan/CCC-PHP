<?php
// print_r($_GET);exit;
//  you can use $_GET or $_POST depends upon the method you have selected in the form(html).
if(isset($_POST['title']))
// $_POST  :  Global variable in order to get the form data 
{
    include("config.php");

$title = $_POST['title'];
$message = $_POST['msg'];
$sql = "
INSERT INTO todo 
(title,msg) 
 VALUES ('$title', '$message')
 ";
//  print_r($sql);exit;
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();

}
?>