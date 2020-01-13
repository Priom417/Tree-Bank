<?php
	$conn1 = mysqli_connect("localhost","root","");

	$sql = "CREATE DATABASE TREE_BANK";
	if ($conn1->query($sql) === TRUE) {
	    echo "Database TREE_BANK created successfully.<br>";
	} else {
	    echo "Error creating database: " . $conn->error.".<br>";
	}

	$conn = mysqli_connect("localhost","root","","tree_bank");
	$sql1 = "CREATE TABLE user_table (
	  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	  full_name VARCHAR(30) NOT NULL,
	  email VARCHAR(30) NOT NULL,
	  password VARCHAR(50) NOT NULL,
	  user_type VARCHAR(50) NOT NULL
	  )";
	if ($conn->query($sql1) === TRUE) {
	    echo "User Table created successfully.<br>";
	} else {
	    echo "Error creating User Table: " . $conn->error.".<br>";
	}


	$sql2 = "CREATE TABLE nursary (
	  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	  nursary_name VARCHAR(3000) NOT NULL,
	  owner VARCHAR(30) NOT NULL,
	  address VARCHAR(50000) NOT NULL
	  )";
	if ($conn->query($sql2) === TRUE) {
	    echo "Nursary Table created successfully.<br>	";
	} else {
	    echo "Error creating Nursary Table: " . $conn->error.".<br>";
	}

	$sql3 = "CREATE TABLE tree (
	  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	  tree_name VARCHAR(3000) NOT NULL,
	  tree_price VARCHAR(3000) NOT NULL,
	  nursary_owner_name VARCHAR(3000) NOT NULL,
	  nursary_address VARCHAR(50000) NOT NULL,
	  catagory VARCHAR(500) NOT NULL,
	  description VARCHAR(500000) NOT NULL
	  )";
	if ($conn->query($sql3) === TRUE) {
	    echo "Table tree created successfully.<br>";
	} else {
	    echo "Error creating TREE Table: " . $conn->error.".<br>";
	}


	$sql4 = "CREATE TABLE FORUM (
	  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	  user_name VARCHAR(30) NOT NULL,
	  msg VARCHAR(30000) NOT NULL
	  )";
	if (mysqli_query($conn, $sql4)) {
      echo "Table Forum created successfully.<br>";
  	} else {
      echo "Error creating Forum table: " . mysqli_error($conn) . ".<br>";
  	}

  	$sql5 = "CREATE TABLE CART (
	  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	  user_name VARCHAR(30) NOT NULL,
	  tree_name VARCHAR(300) NOT NULL,
	  tree_price VARCHAR(300) NOT NULL,
	  tree_type VARCHAR(300) NOT NULL,
	  nursery_name VARCHAR(300) NOT NULL,
	  nursery_address VARCHAR(30000) NOT NULL
	  )";
	if (mysqli_query($conn, $sql5)) {
      echo "Table Cart created successfully.<br>";
  	} else {
      echo "Error creating Cart table: " . mysqli_error($conn) . ".<br>";
  	}
?>