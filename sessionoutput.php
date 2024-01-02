<?php
session_start();
if(isset($_SESSION['lang'])){


echo $_SESSION['lang'];
echo "<br>";
echo "Welcome $_SESSION[user]<br>";

if($_SESSION['lang'] == "en"){
echo '<a href = /sessionprogram.php>Back<a>';
}
else
{
echo '<a href = /sessionprogram.php>bouton retour<a>';
}
}
else{
    echo "Session Expired!";
}
echo ' | <a href = /destorysession.php>Destory Session<a>';

?>