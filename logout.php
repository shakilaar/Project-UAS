<?php
// Mulai sesi
session_start();

// Hancurkan semua variabel sesi
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login
header("location: login.php");
exit;
?>
