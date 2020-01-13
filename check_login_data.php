<?php
  $conn = mysqli_connect("localhost","root","","tree_bank");
  $result = mysqli_query($conn,"SELECT * FROM user_table");
  $email = $_POST['email'];
  $pass = $_POST['psw'];
  $flag = 0;
  $flag1 = 0;
  while($row = mysqli_fetch_assoc($result)){
    //echo json_encode($row['email']);
    if ($row['email'] == $email && $row['password'] == $pass) {
      # code...
      $flag = 1;
      if ($row['user_type'] == "Nursary Owner") {
        # code...
        $flag1 = 1;
      } else {
        # code...
        $flag1 = 0;
      }
      
      
    }

  }

  if ($flag == 1) {
    # code...
    if ($flag1 == 1) {
      # code...
      header("refresh:0; url=users_account.php");
    } else {
      # code...
      header("refresh:0; url=demo.php");
    }
    
  } else {
    # code...
    echo "Email Password Incorrect";
    header("refresh:2; url=login.html");
  }
  

?>