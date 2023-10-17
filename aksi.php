<?php
	$nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','prognetd1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(nama, nim, alamat, jenis_kelamin, jurusan, email) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $nama, $nim, $alamat, $jenis_kelamin, $jurusan, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data Berhasil Disimpan Ke Database!";
		$stmt->close();
		$conn->close();
	}
?>
