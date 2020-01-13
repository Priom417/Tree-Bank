<?php
  session_start();
  if (isset($_SESSION["unm"])) {
    # code...
    if ($_SESSION["uType"] == "CART") {
      # code...
      ?>
        <script type="text/javascript">
          window.location='buyer_account.php';
        </script>
      <?php
    } else {
      # code...
      ?>
        <script type="text/javascript">
          window.location='users_account.php';
        </script>
      <?php
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 18%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h1>Login</h1>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit1" value="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
  if(isset($_POST['submit1'])){
    $conn = mysqli_connect("localhost","root","","tree_bank");
    $result = mysqli_query($conn,"SELECT * FROM user_table WHERE email = '$_POST[email]' && password = '$_POST[psw]' ");
    while ($row = mysqli_fetch_assoc($result)) {
      $_SESSION["unm"] = $row["full_name"];
      if ($row["user_type"] == "Buyer") {
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

    }
  }

?>
</body>
</html>