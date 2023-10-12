<?php
if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $NIM = $_POST['NIM'];
    $alamat = $_POST['Alamat'];
    $jeniskelamin = $_POST['Jenis Kelamin'];
    $jurusan = $_POST['Jurusan'];
    $email = $_POST['Email'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Teknik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Data Hasil Pendaftaran</h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $nama_lengkap  ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $NIM  ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $alamat  ?></td>
                </tr>
                <tr>  
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jeniskelamin  ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?= $jurusan  ?></td>
                </tr>
                <tr>    
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email  ?></td>
                </tr>
            </table>
            </fieldset>
        </div>
</body>

</html>