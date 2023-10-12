<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Form Mahasiswa Udayana
                <br>Fakultas Teknik
            </h2>
            <form action="aksi.php" method="POST">
                <table>
                    <tr>
                        <p>Nama Lengkap</p>
                        <p><input type="text" name="nama_lengkap" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>NIM</p>
                        <p><input type="number" name="NIK" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Alamat</p>
                        <p><input type="text" name="tempat_lahir" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Jenis Kelamin</p>
                        <p>
                            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </p>
                    </tr>
                    <tr>
                    <p>Jurusan</p>
                        <p>Pilih Jurusan</p>
                        <select name="pilihan_1" style="width: 300px; height: 25px;">
                            <option>-Pilih-</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                        </select>
                    </tr>
                    <tr>
                        <p>Email</p>
                        <p><input type="text" name="email" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>
                            <button type="submit" name="submit" style="width: 70px; height: 30px;">Submit</button>
                        </p>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>