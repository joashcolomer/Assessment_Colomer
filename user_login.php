<?php
   $db = mysqli_connect('localhost', 'root', '');
   mysqli_select_db($db,'assestt');

   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $pass = $_POST['pass'];

       $query = mysqli_query($db, "SELECT * FROM user WHERE username='$username' AND pass='$pass'");
       $username = stripslashes($username);
       $pass = stripslashes($pass);
       $res = mysqli_fetch_assoc($query);
       $username = mysqli_real_escape_string($db,$_POST['username']);
       $pass = mysqli_real_escape_string($db,$_POST['pass']);

       $result = mysqli_num_rows($query);
       session_start();

       if($result > 0){
           $_SESSION['username'] = $username;
           header('location:main.php');
       }
       else{
           echo "<script> window.alert('invalid')</script>";
       }


   }





?>