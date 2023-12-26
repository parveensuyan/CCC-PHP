<?php
   $arrayOne = array(20,303,4056,0560);
   $arrayTwo = array("A","B","C");
//  function  is keyword
// function Name make sure you are following all of the Naming Conventions. - ,space, special characters
    function for_each_loop_array($array = array()){ //function define
        // $array = array(20,303,4056,0560);
        // $array = array("A","B","C");
        //function body
        foreach ($array as $key => $value) {
            echo $value .'<br>';
        }
    }

    // call the function
    for_each_loop_array($arrayOne);
    for_each_loop_array($arrayTwo);
    for_each_loop_array(array('x','y','z'));

?>
 