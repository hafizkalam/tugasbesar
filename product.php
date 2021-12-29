<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>GreenShop - Products</title>
	<link rel="icon" href="img/icon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/tugasbesar.css">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
	<!-- Sidebar -->
	<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
  		<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  		<a href="home.php" class="w3-bar-item w3-button">Home</a>
  		<a href="about.php" class="w3-bar-item w3-button">About Us</a>
  		<a href="product.php" class="w3-bar-item w3-button">Product</a>
  		<a href="logout.php" class="w3-bar-item w3-button" onclick="myFunction()">Logout</a>
	</div>
	
<!-- Overlay -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>

<!-- Sidebar -->
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
    <div class="w3-light-green">
        <button class="w3-button w3-light-green w3-xlarge" onclick="w3_open()">☰</button>
        <div style="float: right; margin: 14px; margin-right: 20px">GreenShop</div>
	</div>

	<h1 style="text-align: center;">Daftar Product</h1>
	  <!-- First Photo Grid-->
	  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/totebag.jpg" style="width: 100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Black Totebag</b></p>
        <p><b>Rp150.000</b></p>
        <p>Totebag ini dapat dijadikan tempat barang belanja, buku, alat kerja kantor, dll</p>
        <a href="pembayaran.php"><button class="button" type="button" class="btn btn-success">Beli</button></a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/straws.jpg" style="width:70%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Stainless Straws</b></p>
        <p><b>Rp25.000</b></p>
        <p>Straw stainless dapat dipakai berulang kali. Jangan lupa mencucinya setelah dipakai</p>
        <a href="pembayaran.php"><button class="button" type="button" class="btn btn-success">Beli</button></a>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="img/tumbler.jpg" style="width:75%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Tumbler</b></p>
        <p><b>Rp100.000</b></p>
        <p>Bisa digunakan sebagai tempat minum saat berolahraga atau saat bekerja kantor</p>
        <a href="pembayaran.php"><button class="button" type="button" class="btn btn-success">Beli</button></a>  
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/chopstik.jpg" style="width:70%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Stainless Chopstick</b></p>
        <p><b>Rp50.000</b></p>
        <p>Chopsticks ini bisa digunakan berulang kali agar lebih ramah lingkungan</p>
        <a href="pembayaran.php"><button class="button" type="button" class="btn btn-success">Beli</button></a>  
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/tempatmakan.jpg" style="width:75%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lunch Box</b></p>
        <p><b>Rp150.000</b></p>
        <p>Tempat makan yang lebih ramah dan lebih praktis digunakan saat bekerja atau berlibur</p>
        <a href="pembayaran.php"><button class="button" type="button" class="btn btn-success">Beli</button></a>  
      </div>
    </div>
  </div>

<script>
function w3_open() {
  	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("myOverlay").style.display = "none";
}

function myFunction() {
  alert("Anda Berhasil Logout!");
}
</script>
</body>
</html>