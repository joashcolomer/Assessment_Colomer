<?php
                $db = mysqli_connect('localhost', 'root', '') or
                die ('Unable to connect. Check your connection parameters.');
                mysqli_select_db($db,'assestt') or die(mysqli_error($db));

						
                    $id = $_GET['id'];
                    
					$query = mysqli_query($db,"UPDATE stocks SET status=1 WHERE id='$id'");

						
				?>
                <script type="text/javascript">
			alert(" Successfully Deleted");
			window.location = "product.php";
		</script>