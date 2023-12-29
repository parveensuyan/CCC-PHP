<?php
if(isset($_POST['title']))
// $_POST  :  Global variable in order to get the form data 
{
    include("config.php");

$title = $_POST['title'];
$message = $_POST['msg'];
$id = $_POST['id'];

$sql = "
UPDATE todo SET title = '$title',msg = '$message'
where id  = $id
 ";
//  print_r($sql);exit;
if ($conn->query($sql) === TRUE) {
    header("Location: todolist.php");
echo "New record created successfully";
} else {
echo "Error occured : " . $sql . "<br>" . $conn->error;
}
    $conn->close();

}
?>