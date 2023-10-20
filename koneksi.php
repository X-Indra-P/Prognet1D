<?php
	$host = 'prognet.localnet';
	$user = '2205551143';
	$pass = '2205551143';
	$db = 'db_2205551143';

	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
