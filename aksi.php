<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$koneksi = mysqli_connect("localhost", "root", "prognet1D");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];

// Query untuk menyimpan data ke database
$sql = "INSERT INTO biodata (nama, nim, alamat, jenis_kelamin, jurusan, email) 
        VALUES ('$nama', '$nim', '$alamat', '$jenis_kelamin', '$jurusan', '$email')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
