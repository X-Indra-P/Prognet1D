<?php
include('koneksi.php'); // Mengambil koneksi ke database
$sql = "SELECT * FROM form_biodata";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Alamat</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["nim"] . "</td><td>" . $row["alamat"] . "</td><td>" . $row["jenis_kelamin"] . "</td><td>" . $row["jurusan"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan";
}

mysqli_close($koneksi); // Tutup koneksi database
?>
