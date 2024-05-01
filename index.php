<?php
session_start();

// Memeriksa jika pengguna belum login, maka arahkan ke halaman login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="settings.php">Settings</a>
        <div class="logout">
        <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <h2>Selamat Datang di Sistem Informasi Kegiatan Rutin</h2>
            <p>Ini adalah halaman dashboard.</p>
        </div>
    </div>
</body>
</html>
