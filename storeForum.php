<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","tree_bank");
	
	$result = mysqli_query($conn,"INSERT INTO forum (user_name, msg)
  VALUES ('".$_SESSION["unm"]."','".$_POST["message"]."')");
	mysqli_close($conn);

  	?>
        <script type="text/javascript">
          window.location='forum.php';
        </script>
    <?php
?>