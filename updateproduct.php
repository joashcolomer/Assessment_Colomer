<?php
    include('db.php');


    $id = $_POST['id'];
    $stockName = $_POST['stockName'];
    $stockValue = $_POST['stockValue'];
    $stockQuanty = $_POST['stockQuanty'];

    $query = mysqli_query($db, "UPDATE stocks SET stockName='$stockName', stockValue='$stockValue', stockQuanty='$stockQuanty' WHERE id='$id'");

    ?>
    <script type="text/javascript">
        alert("updated");
        window.location = "product.php";
    </script>




