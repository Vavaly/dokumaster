<?php

require_once "functions/config.php";



function getJumlahDokumen() {
    global $koneksi;
    $query = "SELECT COUNT(*) as total FROM documents";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function getJumlahPengguna() {
    global $koneksi;
    $query = "SELECT COUNT(*) as total FROM users";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function getPenggunaAktif() {
    global $koneksi;
    $query = "SELECT COUNT(*) as total FROM users WHERE is_active = 1";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function getPenggunaTidakAktif() {
    global $koneksi;
    $query = "SELECT COUNT(*) as total FROM users WHERE is_active = 0";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function getDokumenTerbaru() {
    global $koneksi;
    $query = "SELECT d.*, u.username 
              FROM documents d 
              JOIN users u ON d.uploaded_by = u.user_id 
              ORDER BY d.created_at DESC 
              LIMIT 5";
    $result = mysqli_query($koneksi, $query);
    $dokumen = array();
    while($row = mysqli_fetch_assoc($result)) {
        $dokumen[] = $row;
    }
    return $dokumen;
}

function getPenggunaTerbaru() {
    global $koneksi;
    $query = "SELECT user_id, username, email, created_at 
              FROM users 
              ORDER BY created_at DESC 
              LIMIT 5";
    $result = mysqli_query($koneksi, $query);
    $pengguna = array();
    while($row = mysqli_fetch_assoc($result)) {
        $pengguna[] = $row;
    }
    return $pengguna;
}

function formatTanggal($tanggal) {
    return date('d M Y', strtotime($tanggal));
}

function cekLogin() {
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
        header("Location: login.php");
        exit();
    }
    if($_SESSION['role'] !== 'admin') {
        header("Location: unauthorised.php");
        exit();
    }
}

?>