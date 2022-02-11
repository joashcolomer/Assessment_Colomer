<?php
    session_start();
    $username = $_SESSION['username'];
    error_reporting(0);
    require_once('db.php');
    if(!$_SESSION['username']){
        exit(header('location:index.php'));
    }
    include('addproduct.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="product.php">Add Product</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<div class="col-md-6">
    <div class="thumbnail">
      <a href="tshirtone">
        <img src="shutterstock_516831739-by-bonchan-1.jpg    " alt="Lights" style="width:100%">
        <div class="caption">
          <p>Pork Sisig</p>
        </div>
      </a>
    </div>
  </div>

  <form action="addproduct.php" method="post">
  <div class="col-md-6">
    <label for="email">Food name:</label>
    <input type="text" class="form-control" id="email" name="stockName">
  </div>
  <div class="col-md-6">
    <label for="pwd">Food Value:</label>
    <input type="number" class="form-control" id="pwd" name="stockValue">
  </div>
  <div class="col-md-6">
    <label for="pwd">Food Quantity:</label>
    <input type="number" class="form-control" id="pwd" name="stockQuanty">
  </div>
  
  <div class="col-md-2">
  <br>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
</form> 

</div>

</div>

</body>
</html>