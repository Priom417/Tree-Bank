<!DOCTYPE html>
<html>
<title>Cart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.marg{
  margin-left: 250px;
  margin-right: 250px;
}
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>My Cart</b></h1>
</header>


<div id="w3col">
</div>

</div>

<script>
  var ajax = new XMLHttpRequest();
  ajax.open("GET","cartData.php",true);
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
      var c = document.getElementById("w3col");
      var card4 = document.createElement("div");
      var img = document.createElement("img");
      img.src = "img/garden.jpg";
      img.style = "width: 100%";
      var cont = document.createElement("div");
      var tName = document.createElement("H3");
      tName.innerHTML = data[i].tree_name;
      var tPrice = document.createElement("H3");
      tPrice.innerHTML = data[i].tree_price;
      var tType = document.createElement("H5");
      tType.innerHTML = data[i].tree_type;
      var tDes = document.createElement("P");
      tDes.innerHTML = data[i].nursery_name;
      var nAddr = document.createElement("H5");
      nAddr.innerHTML = "Address : " + data[i].nursery_address;
      var br = document.createElement("BR");

      //Append Class
      c.appendChild(card4);
      card4.appendChild(img);
      card4.appendChild(cont);
      cont.appendChild(tName);
      cont.appendChild(tPrice);
      cont.appendChild(tType);
      cont.appendChild(tDes);
      cont.appendChild(nAddr);
      //cont.appendChild(br);
      c.appendChild(br);


      //Add class Attribute
      c.classList.add("w3-col");
      card4.classList.add("w3-card-4","marg","w3-white");
      cont.classList.add("w3-container");
      //alert("Priom......");
    }
  }
</script>
</body>
</html>
