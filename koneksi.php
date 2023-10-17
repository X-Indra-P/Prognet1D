<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$database = "prognetd1"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
