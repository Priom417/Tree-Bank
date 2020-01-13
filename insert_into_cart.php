<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","tree_bank");
	
	$result = mysqli_query($conn,"INSERT INTO cart (user_name, tree_name, tree_price, tree_type, nursery_name, nursery_address)
  VALUES ('".$_SESSION["unm"]."','".$_POST["nam"]."','".$_POST["prc"]."','".$_POST["type"]."','".$_COOKIE['nursary_name']."','".$_POST["adr"]."')");
	mysqli_close($conn);
?>