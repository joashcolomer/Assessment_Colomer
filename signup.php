<?php
session_start();

require_once('connection.php')

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
      <a class="navbar-brand" href="index.php">Mangan da Kita</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<form  method="post" action="user_signup.php">
  <div class="form-group">
    <label for="email">Firstname:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="form-group">
    <label for="email">Lastname:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
  </div>
  <button type="submit" class="btn btn-default" name="submit" value='submit'>Submit</button>
</form>     
</div>

</body>
</html>