<?php
  session_start();
  //Set cookie..........
  $servername = "localhost";
  $username = "root";
  $pas = "";
  $dbname = "tree_bank";

  // Create connection
  $conn = mysqli_connect($servername, $username, $pas, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO tree (tree_name, tree_price, nursary_owner_name, nursary_address, catagory, description)
  VALUES ('".$_POST["tree_name"]."','".$_POST["tree_price"]."','".$_SESSION['unm']."','".$_COOKIE['nursary_address']."','".$_POST["tree_type"]."','".$_POST["tree_description"]."')";


  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  mysqli_close($conn);

  ?>
    <script type="text/javascript">
        window.location='users_account.php';
    </script>
  <?php

  ?>