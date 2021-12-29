<?php 

// $conn = mysqli_connect("localhost", "root", "", "tugasbesar");

// if( isset($_POST['pesan'])){
// 	if($_GET['pesan'] == "gagal"){
//         echo "<script>
//         alert ('Login gagal! username dan password salah!');
//         </script>";
// 	}else if($_GET['pesan'] == "belum_login"){
//         echo "<script>
//         alert ('Anda harus login untuk mengakses halaman admin');
//         </script>";
// 	}else if($_GET['pesan'] == ""){
//         echo "<script>
//         alert ('Anda telah terdaftar');
//         </script>";
//     }
// }

// if (isset($_POST['submit'])) {

//     $username = $_POST['username'];
//     $passwordold = $_POST['password'];
  
//     mysqli_query($conn, "INSERT INTO users(username,password) VALUES ('$username', '$password')");
// }
// ?>

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
        <form action="cek_register.php" method="POST">
            <h3><div class="form-group">Silahkan Registrasi</div></h3>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block">Submit</></button></div>
        </form>
    </div>
</body>
</html>