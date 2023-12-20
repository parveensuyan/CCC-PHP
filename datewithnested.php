<?php
date_default_timezone_set("Asia/Hong_Kong");
$dateHongKong =  date("h:i:sa");
print_r("Hong Kong Timezone ".$dateHongKong);

echo "<p style = 'color:red;font-weight:bold'>IF ELSEIF WITH DATE<br><p>";
date_default_timezone_set ("America/Vancouver");
// date_default_timezone_set("Asia/Hong_Kong");

$dateVancouver =  date("H:i:sa");
print_r("Vancouver Timezone " . $dateVancouver .'<br>');

$dateForIfElse =  date("H");
// 24
if($dateForIfElse < 12){
echo "Good Morning!";
}
elseif ($dateForIfElse >12 && $dateForIfElse < 17 ){
    echo "Good day!";
}
elseif ($dateForIfElse > 17 && $dateForIfElse  < 19){
    echo "Good Evening!";
}
else{
    echo "Good Night!";
}

?>