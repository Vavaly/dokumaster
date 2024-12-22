<?php
// Pastikan pengguna adalah admin
session_start();

// Mengecek apakah role pengguna ada di sesi
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    // Jika bukan admin, redirect ke halaman umum
    header("Location: ../views/index.php");
    exit();
}

// Tampilan halaman admin
?>
<h1>Welcome, Admin!</h1>