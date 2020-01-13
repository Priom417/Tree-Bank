<?php
  session_start();

  $conn = mysqli_connect("localhost","root","","tree_bank");
  $sql = "INSERT INTO user_table (full_name, email, password, user_type)
  VALUES ('".$_POST["full"]."','".$_POST["email"]."','".$_POST["psw"]."','".$_POST["exampleFormControlSelect1"]."')";


  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      $_SESSION["unm"] = $_POST["full"];
      if ($_POST["exampleFormControlSelect1"] == "Buyer") {
        # code...
        $_SESSION["uType"] = "CART";
        ?>
        <script type="text/javascript">
          window.location='buyer_account.php';
        </script>
        <?php
      } else {
        # code...
        $_SESSION["uType"] = "ADD TREE DESCRIPTION";
        ?>
        <script type="text/javascript">
          window.location='users_account.php';
        </script>
        <?php
      }
      
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  ?>