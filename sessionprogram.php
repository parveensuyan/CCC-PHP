<?php
// start the session
session_start();
// to create a session we have global variable given by php $_SESSION
$_SESSION["lang"] = "en";
$_SESSION["user"] = "Test";

echo '<a href = /sessionoutput.php>Check Output<a>';

?>