<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE todo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
msg VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
echo "Table Todo created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>


