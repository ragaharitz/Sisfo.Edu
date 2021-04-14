<?php

session_start();
require_once("config.php");
$users= $_POST['username'];
$pass= $_POST['password'];

$sql = "SELECT * FROM table_users WHERE username = '$users'";
$query = $conn->query($sql);
$hasil = $query->fetch_assoc();


if ($query->num_rows == 0) {
	echo "<div align='center'>Maaf username belum terdaftar. Silahkan registrasi terlebih dahulu!<a href=formlogin.php><br> Kembali </a></div>";
	
} else {
	if ($pass <> $hasil['password']) 
		{ echo "<div align='center'>Maaf password salah. Silahkan coba lagi!<a href=formlogin.php> Back </a></div>";
	
}	else {
	$_SESSION['username'] = $hasil['username'];
	$_SESSION['id'] = $hasil['id'];
	$newURL = "dasboard.php";
  header('Location: '.$newURL);

}
}

?>