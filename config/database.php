<?php
// Konfigurasi koneksi database
$host = "localhost";      // atau IP database server Anda
$dbname = "dokumaster";  // Ganti dengan nama database Anda
$username = "root";       // Ganti dengan username database Anda
$password = "";           // Ganti dengan password database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil, kita bisa gunakan $conn untuk query.
?>
