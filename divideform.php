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

<div class="container">
  <h2>Divide form</h2>
  <form action="/divide.php" method = "POST">
    <div class="form-group">
      <label for="fNumber"> First Number:</label>
      <input type="text" class="form-control" id="fNumber" placeholder="Enter First Number" name="fNumber">
    </div>
    <div class="form-group">
      <label for="sNumber">Second Number:</label>
      <input type = "text"  class="form-control"  id="sNumber" placeholder="Enter Second Number" name="sNumber"/>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
