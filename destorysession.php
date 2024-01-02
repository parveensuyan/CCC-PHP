<?php
session_start();

if(isset($_SESSION['lang']) && isset($_SESSION['user']) ){
// && : both condition has to be true in order to make this condition work
$_SESSION['lang'] = '';
$_SESSION['user'] = '';
header("Location:sessionoutput.php");
}

?>