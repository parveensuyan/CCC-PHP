<?php
if(isset($_GET['id']))
{
    include("config.php");
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM todo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: todolist.php");
} else {
echo "Error deleting record: " . $conn->error;
}
$conn->close();
}
?>