<?php

session_start();
require_once("config.php");
$users= $_POST['username'];
$pass= $_POST['password'];

$sql = "SELECT * FROM table_pengajar WHERE username = '$users'";
$query = $conn->query($sql);
$hasil = $query->fetch_assoc();


if ($query->num_rows == 0) {
	echo "<div align='center'>Maaf username belum terdaftar. Silahkan hubungi bagian Sistem Informasi!<a href=formloginpengajar.php><br> Kembali </a></div>";
	
} else {
	if ($pass <> $hasil['password']) 
		{ echo "<div align='center'>Maaf password salah. Silahkan coba lagi!<a href=formloginpengajar.php> Back </a></div>";
	
}	else {
	$_SESSION['username'] = $hasil['username'];
	$_SESSION['id'] = $hasil['id'];
	$newURL = "dashboardpengajar.php";
  header('Location: '.$newURL);

}
}

?>