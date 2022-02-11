<?php
    include('db.php');


    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $query = mysqli_query($db, "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$id'");

    ?>
    <script type="text/javascript">
        alert("updated");
        window.location = "admin.php";
    </script>




