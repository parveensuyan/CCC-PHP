<html>
<head>
<title>ChessBoard</title>
</head>
<body>
<table width = "400px" border= "1px" >
<?php
for($i=1;$i<=10;$i++){ 
  echo "<tr>";
  // even blocks should be white and odd blocks can be black
  // even number  :2,4,6,8,10......so on [can be divided by 2]
  // odd number  : 1,3,5,7,9,11 ....so on [it will some remainder at the time of division with 2]
  for($j=1;$j<=10;$j++) {
    // [/] OR [%]
    if($j%2===0 ){
        echo "<td style = background-color:black;width:30px;height:30px></td>";
    }else{
           echo "<td style = background-color:white;width:30px;height:30px></td>";


    }
  }
    echo "</tr>";

}
  // echo "returned from nested loop";
?>
</table>
</body>
</html>
<!-- <table>
  <tr> = i 
    <td></td> = j
        <td></td>
            <td></td>

</tr>
<tr>
    <td></td>
        <td></td>
            <td></td>

</tr>
</table> -->