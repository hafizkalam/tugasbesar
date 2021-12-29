<?php 
session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}

	//ubah timezone menjadi jakarta
	date_default_timezone_set("Asia/Jakarta");

	//ambil jam dan menit
	$jam = date('H:i');

	//atur salam menggunakan IF
	if ($jam >= '05:30' && $jam < '10:00') {
    	$salam = 'Pagi';
	} else if ($jam >= '11:00' && $jam < '15:00') {
    	$salam = 'Siang';
	} else if ($jam < '18:00') {
    	$salam = 'Sore';
	} else {
    	$salam = 'Malam';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>GreenShop - Home Page</title>
	<link rel="icon" href="img/icon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/tugasbesar.css">
</head>
<body>
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
	
<!-- Page Content -->
<div class="mySlides fade">
<div style="text-align: center;"><h4><?php echo 'Selamat ' . $salam; ?> , <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<p>Enjoy Shopping</p>
  	<img src="img/satu.jpg" style="width:100%">
	<div class="slideshow-container">
	</div>
</div>

<!-- <div class="mySlides fade">
	<div style="text-align: center;"><h4><?php echo 'Selamat ' . $salam; ?> , <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<p>Enjoy Shopping</p>
  	<img src="img/dua.jpg" style="width:100%">
	<div class="slideshow-container">
	</div>
</div>

<div class="mySlides fade">
	<div style="text-align: center;"><h4><?php echo 'Selamat ' . $salam; ?> , <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<p>Enjoy Shopping</p>
  	<img src="img/tiga.jpg" style="width:100%">
  	<div class="slideshow-container">
	</div>
	</div>
</div> -->
<br>

<div style="text-align: center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 
}
</script>

</body>
</html>