<?php
	$host = 'localhost:3307';
	$user = 'root';
	$pass = '';
	$db = 'prognetd1';

	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
