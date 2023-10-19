<?php
	$host = 'localhost:3307';
	$user = 'root';
	$pass = '';
	$db = 'tb_siswa';

	$conn = mysqli($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
