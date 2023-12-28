<?php
include("config.php");
$sql = "SELECT * FROM todo";
// * fetch all fields (id,title,msg)
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Title: " . $row["title"]. " " . $row["msg"]. "<br>";
}
} else {
echo "No record found!";
}
$conn->close();

?>