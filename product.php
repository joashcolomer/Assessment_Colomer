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
    .test {
      height: 400px !important;
    }

    .test2 {
      height: 90% !important
    }
    .test3{
    height: 90% !important 
  }
    .test4{
    height: 90% !important 
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
    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail test">
      <a href="foodtone.php">
        <img class="test2" src="shutterstock_511072528-by-kim-david.jpg" style="width:100% ">
        <div class="caption">
          <p>Bulalo</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail test">
      <a href="foodtwo.php">
        <img class="test3" src="shutterstock_516831739-by-bonchan-1.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Pork Sisig</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail test">
      <a href="foodfor.php">
        <img class="test4" src="800px-Chicken_adobo.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Chicken Adobo</p>
        </div>
      </a>
    </div>
  </div>
</div>
</div>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Food name</th>
        <th>Food price</th>
        <th>Food quantity</th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
    <?php
								$sql="SELECT * from stocks";
								$result = mysqli_query ($db, $sql);
								while ($row = mysqli_fetch_assoc($result)) {

if ($row['status']==0) {

								echo'<tr>
							<td>'. $row['stockName']  .'</td>
							<td>'. $row['stockValue'] .'</td>
							<td>'. $row['stockQuanty']. '</td>
              <td><a  type="button" class="btn btn-info" href="product_edit.php?action=edit & id='. $row['id']. '"> EDIT </a>	
              <a  type="button" class="btn btn-danger" href="delete_admin.php?action=edit & id='. $row['id']. '"> DELETE </a>	</td>		
              				
								</tr>';}
              } 
            
              
								?>
    </tbody>
  </table>
</div>


</body>
</html>