<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    $list = getRecords();
    ?>
<div class="container">
  <h2>Todo List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titlle </th>
        <th>Message</th>
        <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
<?php 
 foreach($list as $key => $value) {
    ?>
      <tr>
        <td><?= $value[0]?></td>
        <td><?= $value[1]?></td>
        <td><?= $value[2]?></td>
        <td>
          <!-- /deletetodo.php?id=< $value[0]?> -->
            <a href="/edittodo.php?id=<?= $value[0]?>">Edit</a> | <a href="javascript:void(0)" onClick = confirmDelete(<?= $value[0]?>)>Delete</a>
        </td>
      </tr>
<?php } ?>

    </tbody>
  </table>
</div>
</body>
</html>
<script>
function confirmDelete (id) {
 var status = confirm ("Are you sure to delete this record?")
// status true means user select ok and false : selected cancel
  if(status === true){
    window.location.href = "/deletetodo.php?id="+id
  }
}
</script>
<?php
function getRecords(){
include("config.php");
// $sql = "SELECT * FROM todo ORDER BY title asc limit 10 offset 1";

$sql = "SELECT * FROM todo ORDER BY title asc";
// * fetch all fields (id,title,msg)
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
return $row = $result->fetch_all();
} 
else {
echo "No record found!";
}
$conn->close();
}
?>