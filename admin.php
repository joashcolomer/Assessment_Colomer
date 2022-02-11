<?php
    session_start();
    $username = $_SESSION['username'];
    error_reporting(0);
    require_once('db.php');
    if(!$_SESSION['username']){
        exit(header('location:index.php'));
    }
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
  <style>
    .image {
      width: 1000px;
      height: 500px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Mangan da Kita</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="product.php">Add Product</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile_admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<img  class="image" src="Banner.png"/>
</div>

</body>
</html>