<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GreenShop About Us</title>
    <link rel="icon" href="img/icon.jpg">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
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
    <div style="margin: 100px; text-align: center;" >
        <h3>About Us</h3>
    </div>

    <div class="row">
    <div class="biodata col-sm-6">
    <div class="center">
    <table>
        <tr>
  	        <th colspan="3"><img src="img/ghibran.jpeg"></th>
        </tr>
        <tr>
  	        <th colspan="3"><br></th>
        </tr>
            <tr>
                <th>Nama</th>
                <td> Ghibran Muhammad</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td> Blitar, 30 November 2000</td>
            </tr>
            <tr>
                <th>Universitas</th>
                <td> Politeknik Negeri Malang</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td> Teknologi Informasi</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td> D4 Teknik Informatika</td>
            </tr>
        </table>
</div>
 
    </div>

    <div class="biodata col-sm-6" >
    <div class="center">
  <table>
        <tr>
  	        <th colspan="3"><img src="img/hafiz.jpeg"></th>
        </tr>
        <tr>
  	        <th colspan="3"><br></th>
        </tr>
            <tr>
                <th>Nama</th>
                <td> Hafiz Kalam Abdillah</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td> Lumajang, 6 Desember 2000</td>
            </tr>
            <tr>
                <th>Universitas</th>
                <td> Politeknik Negeri Malang</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td> Teknologi Informasi</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td> D4 Teknik Informatika</td>
            </tr>
        </table>
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
</script>
</body>
</html>