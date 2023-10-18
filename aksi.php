<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "prognetd1";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nama        = "";
$nim       = "";
$alamat     = "";
$jenis_kelamin   = "";
$jurusan     = "";
$email      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from mahasiswa where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama        = $r1['nama'];
    $nim       = $r1['nim'];
    $alamat     = $r1['alamat'];
    $jenis_kelamin   = $r1['jenis kelamin'];
    $jurusan   = $r1['jurusan'];
    $email   = $r1['email'];

    if ($nim == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama        = $_POST['nama'];
    $nim       = $_POST['nim'];
    $jenis_kelamin     = $_POST['jenis kelamin'];
    $jurusan   = $_POST['jurusan'];
    $email   = $_POST['email'];

    if ($nama && $nim && $jenis_kelamin && $jurusan && $email) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update form_biodata set nama = '$nama',nim='$nim',alamat='$alamat',jenis kelamin = '$jenis_kelamin',jurusan='$jurusan',email = '$email' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into mahasiswa(nama,nim,alamat,jenis kelamin,jurusan,email) values ('$nama','$nim','$alamat','$jenis_kelamin','$jurusan','$email')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
		    </div>
                    <div class="mb-3 row">
                        <label for="jenis kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Jenis Kelamin" id="jenis kelamin">
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="Laki-Laki" <?php if ($jenis_kelamin == "laki-laki") echo "selected" ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if ($jenis_kelamin == "perempuan") echo "selected" ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option value="">- Pilih Jurusan -</option>
                                <option value="arsitektur" <?php if ($jurusan == "arsitektur") echo "selected" ?>>Arsitektur</option>
                                <option value="Teknik Mesin" <?php if ($jurusan == "Teknik Mesin") echo "selected" ?>>Teknik Mesin</option>
				<option value="Teknik Sipil" <?php if ($jurusan == "Teknik Sipil") echo "selected" ?>>Teknik Sipil</option>
				<option value="Teknik Elektro" <?php if ($jurusan == "Teknik Elektro") echo "selected" ?>>Teknik Elektro</option>
				<option value="Teknologi Informasi" <?php if ($jurusan == "Teknologi Informasi") echo "selected" ?>>Teknologi Informasi</option>
				<option value="Teknik Lingkungan" <?php if ($jurusan == "Teknik Lingkungan") echo "selected" ?>>Teknik Lingkungan</option>
				<option value="Teknik Industri" <?php if ($jurusan == "Teknik Industri") echo "selected" ?>>Teknik Industri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Alamat</th>
			    <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jurusan</th>
			    <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from mahasiswa order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $nama        = $r2['nama'];
                            $nim       = $r2['nim'];
                            $alamat     = $r2['alamat'];
			    $jenis_kelamin       = $r2['jenis kelamin'];
                            $jurusan   = $r2['jurusan'];
			    $email      = $r2['email'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $nim ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
				<td scope="row"><?php echo $jenis_kelamin ?></td>
                                <td scope="row"><?php echo $jurusan ?></td>
				<td scope="row"><?php echo $email ?></td>
                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>
