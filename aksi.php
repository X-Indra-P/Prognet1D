<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];

    $formData = [
        "Nama Lengkap: $nama",
        "NIM: $nim",
        "Alamat: $alamat",
        "Jenis Kelamin: $jenis_kelamin",
        "Jurusan: $jurusan",
        "Email: $email"
    ];

    if (!empty($jurusan)) {
        $formData[] = "Jurusan Yang Anda Pilih:";
        foreach ($jurusan as $s) {
            $formData[] = "- $s";
        }
    } else {
        $formData[] = "Anda belum memilih jurusan.";
    }

    $formDataString = implode("\n", $formData);
    $fileName = "HasilData.txt";
    $formDataString .= "\n";

    file_put_contents($fileName, $formDataString, FILE_APPEND);

    echo "<h1>Form Submission Result</h1>";
    echo "<p>Data telah disimpan ke <strong>$fileName</strong>.</p>";
} else {
    echo "<p>Terjadi kesalahan dalam pengiriman formulir.</p>";
}
?>
