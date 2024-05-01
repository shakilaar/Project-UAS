<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // Ganti dengan nama pengguna database Anda
define('DB_PASSWORD', ''); // Ganti dengan kata sandi database Anda
define('DB_NAME', 'sistem_informasi'); // Ganti dengan nama database Anda

// Membuat koneksi
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Periksa koneksi
if($link === false){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
