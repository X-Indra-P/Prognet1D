<?php
// Mengambil koneksi ke database (pastikan Anda telah membuat koneksi seperti yang telah dijelaskan sebelumnya)
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    // Menyimpan data ke database (operasi Create)
    $sql = "INSERT INTO biodata (nama, nim, alamat, jenis_kelamin, jurusan, email) 
            VALUES ('$nama', '$nim', '$alamat', '$jenis_kelamin', '$jurusan', '$email')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
// Tutup koneksi database (pastikan Anda telah membuatnya di "koneksi.php")
mysqli_close($koneksi);
?>
