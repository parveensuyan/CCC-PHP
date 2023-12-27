<?php
// limitation of passing the argument by reference.
function add_extra_words(&$string)
// &nameOfTheVariable
{
$string .= " Class";
}
$str = "Hi"; 
add_extra_words($str);  
echo $str;
?>
