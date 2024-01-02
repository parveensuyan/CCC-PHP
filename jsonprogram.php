<?php
// key and pair value

/*
{
"id" : 1234,
"name": "ps",
"course_name : "PHP"
} //single json data

[
// start an array
{
"id" : 1234,
"name": "ps",
"course_name : "PHP" //Naming conventions will apply here as well
}, 
{
    "id" : 1234,
    "name": "ps",
    "course_name : "PHP"
},

{
    "id" : 1234,
    "name": "ps",
    "course_name : "PHP"
    },
]

*/

function json_encode_array(){
$array = array(
    ["id"=> "1234","name"=>'test',"course_name"=>"PHP"],
    ["id"=> "1234","name"=>'test',"course_name"=>"PHP"],
    ["id"=> "1234","name"=>'test',"course_name"=>"PHP"]
);
// convert the array into json format
$json_encode_arrayV = json_encode($array);
// fetch record from database , we can convert into json as well with the help of json_encode
json_decode_array($json_encode_arrayV);
}
function json_decode_array($json_array){
    echo "Json Array! <br>";
    print_r($json_array);
    echo " <br>";
    echo " Array! <br>";
    $json_decode_arrayV = json_decode($json_array);
     print_r($json_decode_arrayV);
}
json_encode_array();


?>