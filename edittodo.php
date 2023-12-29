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
<?php $result = getSingleRecord();
if(!empty($result)) { 
?>
<div class="container">
  <h2>Todo Edit</h2>
  <form action="/edittodosubmission.php" method = "POST">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value  = <?= $result['title']?>>
    </div>
    <div class="form-group">
      <label for="msg">Message:</label>
      <textarea  class="form-control" style = "height  : 200px !important" id="msg" placeholder="Enter Message" name="msg"><?= $result['msg']?></textarea>
    </div>
    <input type="hidden" class="" name="id" value = <?= $result['id']?>>
    <button type="submit" class="btn btn-default">Update</button>
    <a href="/selecttodo.php" class="anchor">ALL TODOS</a>
  </form>
</div>
<?php } 
else{
    echo "<p>No records found!</p>";
}
?>
</body>
</html>


<?php
function getSingleRecord(){
    $id = $_GET['id'];

include("config.php");
// $sql = "SELECT * FROM todo ORDER BY title asc limit 10 offset 1";

$sql = "SELECT * FROM todo where id  = $id";
// * fetch all fields (id,title,msg)
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
return $row = $result->fetch_assoc();
} 

$conn->close();
}


?>