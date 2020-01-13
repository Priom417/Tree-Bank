<?php
  //Set cookie..........
  $cookie_name = "nursary_name";
  $cookie_value = $_POST['n_name'];
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

  $cookie_name = "nursary_address";
  $cookie_value = $_POST['n_address'];
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

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

  $sql = "INSERT INTO nursary (nursary_name, owner, address)
  VALUES ('".$_POST["n_name"]."','".$_COOKIE['user']."','".$_POST["n_address"]."')";


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