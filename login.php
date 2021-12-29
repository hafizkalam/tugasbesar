<?php 

if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
        echo "<script>
        alert ('Login gagal! username dan password salah!');
        </script>";
    }else if($_GET['pesan'] == "belum_login"){
        echo "<script>    
        alert ('Anda harus login untuk mengakses halaman admin');
        </script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>GreenShop - Log In or Sign Up</title>
    <link rel="icon" href="img/icon.jpg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tugasbesar.css">
</head>
<body class="w3-light-green">
    <div class="login-dark" style="height: 600px;">
        <form action="cek_login.php" method="POST">
            <h2><div class="form-group" style="margin-left: 10px;">Silahkan Login</div></h2>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
			<div class="form-group"><button class="btn btn-primary btn-block">Log In</button></div>
			Belum Punya Akun ? <br> <a href="register.php">Register</a>
		</form>
    </div>
</body>
</html>