<?php
    session_start();
    $username = $_SESSION['username'];
    error_reporting(0);
    require_once('db.php');
    if(!$_SESSION['username']){
        exit(header('location:index.php'));
    }

    $query = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($db,$query) or die(mysquli_error($db));

        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $first = $row['firstname'];
            $last = $row['lastname'];
            $email = $row['email'];
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
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">Mangan da Kita</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="main.php">Home</a></li>>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<form class="form-horizontal" action="updateuser_admin.php" method='post'>
<div class="form-group">
    <label class="control-label col-sm-2" >id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" name="firstname">firstname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $first ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Lastname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $last?>">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
    </div>
  </div> 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>
</div>

</body>
</html>