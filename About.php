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
<style>
    .video {
      width: 1000px;
      height: 500px;
    }
  </style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">Mangan da Kita</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="main.php">Home</a></li>
      <li ><a href="Contact.php">Contact</a></li>
      <li ><a href="About.php">About</a></li>
      <li ><a href="store.php">Order</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<video width= "1000" controls>
  <source src="Mangan da Kita.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
</video>
  <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/800px-PHP-logo.svg.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>PHP</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/78/XAMPP_logo.svg/1200px-XAMPP_logo.svg.png" alt="Nature" style="width:60%">
        <div class="caption">
          <p>Xampp</p>
        </div>
    </div>
  </div>
</div>
</div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="Adobe_Photoshop_CC_icon.svg.png" alt="Nature" style="width: 40%">
        <div class="caption">
          <p>Photoshop</p>
        </div>
    </div>
  </div>
</div>

</body>
</html>
