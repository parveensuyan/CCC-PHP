<?php
//  timezone_location_get();
$hour = date('H');
// H  :  24hr
// h  : 12 hr 
// echo $hour;
$status = true;
if($hour > 10 ){
$status = false;
}

if($status == false){
echo $status . "Status is false";
}
else{
echo $status . "Status is True";
}
// todo task 2
// Give $name = "YOURNAME"
// if $name is empty print "No Name"
// else print "My name is ".$name

?>