<?php 

// menghubungkan dengan koneksi
require 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_array($sql);
// $aa=;
if($data != null){
    echo "<script>
         alert ('Daftar Gagal! Username Sudah Terdaftar');
         window.location.href='register.php';
         </script>";
    // header("location:register.php");
} else{
	$data = mysqli_query($conn,"INSERT INTO users(username, password) VALUES ('$username', '$password')");
    echo "<script>
         alert ('Daftar Berhasil! Silahkan Login!');
         window.location.href='login.php';
         </script>";
    // header("location:login.php");
} 


// menyeleksi data user dengan username dan password yang sesuai
// $data = mysqli_query($conn,"INSERT INTO users(username, password) VALUES ('$username', '$password')");




// if($data = 0){
// 	header("location:home.php");
// }else{
// 	header("location:register.php?pesan=gagal");
// }

// menghitung jumlah data yang ditemukan
// // $cek = mysqli_num_rows($data);
 
// if($cek > 0){
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";
// 	header("location:home.php");
// }else{
// 	header("location:register.php?pesan=gagal");
// }
?>