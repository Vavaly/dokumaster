<?php
// functions/config.php
$host = 'localhost';  // atau host database Anda
$username = 'root';   // username database Anda
$password = '';       // password database Anda
$database = 'dms'; // nama database Anda

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$conn->set_charset("utf8mb4");
?>