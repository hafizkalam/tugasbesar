<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "tugasbesar");
 // mengecek data dari tabel users
$result = mysqli_query($conn, "SELECT * FROM users");

 // Check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>