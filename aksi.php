<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    $sql = "INSERT INTO biodata (nama, nim, alamat, jenis_kelamin, jurusan, email) 
            VALUES ('$nama', '$nim', '$alamat', '$jenis_kelamin', '$jurusan', '$email')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
