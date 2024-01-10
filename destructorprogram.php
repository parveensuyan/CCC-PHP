<?php
class Myname { 
     public $name;
function __construct($name) {
$this->name = $name;
}
function test (){
    echo "Name<br>";
}
function 	__destruct() { 
echo $this->name;
// call by the end of the file
}
}
$myname= new Myname("Joe");

$myname->test();
?>