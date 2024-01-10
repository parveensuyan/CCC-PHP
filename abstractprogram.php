<?php
// USE OF ABSTRACT KEYWORD
abstract class Mycourses {
    // we will make abstract class and inherit it
         protected $class_name;// properties
        // Abstract method
        public function printClassName($class_name){
            echo $class_name."<br>";
            // function body
        }
        public function printMyName ($name){
            echo $name;
        }
        abstract public function test();
        abstract public function currentClassText();
        // abstract function cannot contain body it has to be define inside the child class
        // we do not need to create every function in the child class ,
        // we are going to create the functions which will "abstract" keyword  like this abstract public function currentClassText();
}
class Myclass extends Mycourses{
    // inherit the abstract  
    function currentClassText(){
     echo "My current class name is ";
     }
     function test(){
        //  abstract functions must be created in the inner class/child class
     }
     
}
$myClass = new Myclass;
$myClass->currentClassText();
$myClass->printClassName("PHP");
$myClass->printMyName("My name is XYZ");

?>
