<?php 
include('connection.php');


if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $username =$_POST['username'];
    $pass=$_POST['pass'];

    $sql = "INSERT INTO user(firstname, lastname, email, username, pass) VALUES ('$firstname', '$lastname', '$email', '$username', '$pass' )";

    if($conn->query($sql) === TRUE){
        echo '<script> alert("success") </script>';
    }
    else{
        echo "failed";
    }
    header("location:index.php");





}

?>