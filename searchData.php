<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","tree_bank");
	$result = mysqli_query($conn,"SELECT * FROM tree WHERE tree_name = '$_SESSION[Search]' ");
	$data = array();
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	echo json_encode($data);
?>