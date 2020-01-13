<?php
  session_start();
  if ($_SESSION["unm"] == "") {
    # code...
    ?>
    <script type="text/javascript">
      window.location = "login.php"
    </script>

    <?php
  } else {
    # code...
  }
  
?>

<!DOCTYPE html>
<html>
<title>FORUM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.write {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}
.inputStyle{
  margin-left:296px;
}
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>FORUM</b></h1>
</header>


<div id="main_div" style="overflow-y: scroll; height:440px;">

</div>

</div>

<div class="write" style="background-color: #f1f1f1">
  <form method="POST" action = "storeForum.php">
        <input type="text" name="message" placeholder="Write here.." class="w3-input inputStyle" style="width: 757px">
        <button type="submit" class="w3-button">SEND</button>
      </form>
</div>


<script>
  var ajax = new XMLHttpRequest();
  ajax.open("GET","forumData.php",true);
  ajax.send();
  
  ajax.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      addToHTML(data);
    }
  }

  function addToHTML(data){
    //console.log(data.length);
    var i;
    for (var i = 0; i < data.length; i++) {
      //document.write("Priom");
      
      var main_div = document.getElementById("main_div");
      var chat_div = document.createElement("div");
      var container = document.createElement("div");
      var nameTxt = document.createElement("H7");
      var image = document.createElement("img");
      var msg = document.createElement("P");
      var br = document.createElement("BR");

      /*main_div.style = "overflow-y: scroll";
      main_div.style = "height: 500px";*/
      nameTxt.innerHTML = data[i].user_name;
      msg.innerHTML = data[i].msg;
      image.src = "img/img_avatar2.png";
      image.style = "border-radius: 50%";
      image.style = "width: 50px";
      image.style = "height: 50px";
      
      //Append Child*/

      main_div.appendChild(chat_div);
      chat_div.appendChild(container);
      container.appendChild(nameTxt);
      container.appendChild(image);
      container.appendChild(msg);
      main_div.appendChild(br);


      //Apply style to div


      //Add class Attribute
      main_div.classList.add("w3-col");
      chat_div.classList.add("w3-card-4", "marg", "w3-white");
      container.classList.add("container");


      //alert("Priom......");
    }
  }
</script>
</body>
</html>
