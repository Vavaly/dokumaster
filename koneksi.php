<?php
$host = 'localhost';
$dbname = 'nama_database';
$username = 'username_database';
$password = 'password_database';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set mode error PDO ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Tangani error koneksi
    die("Koneksi database gagal: " . $e->getMessage());
}
?>