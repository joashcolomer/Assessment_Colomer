<?php

include('connection.php');


if(isset($_POST['submit'])){
    $stockName = $_POST['stockName'];
    $stockValue =$_POST['stockValue'];
    $stockQuanty =$_POST['stockQuanty'];
    

    $sql = "INSERT INTO stocks(stockName, stockValue, stockQuanty) VALUES ('$stockName', '$stockValue', '$stockQuanty' )";

    if($conn->query($sql) === TRUE){
        echo '<script> alert("success") </script>';
    }
    else{
        echo "failed";
    }
    header("location:product.php");





}






?>