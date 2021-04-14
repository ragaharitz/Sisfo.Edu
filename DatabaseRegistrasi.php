<?php

require_once("config.php");
$users= $_POST['Username'];
$pass= $_POST['Password'];
$email = $_POST['Email'];
$depan = $_POST['Depan'];
$tengah = $_POST ['Tengah'];
$belakang = $_POST['Belakang'];


$sql= "INSERT INTO table_users (username, password, email, namadepan, namatengah, namabelakang) VALUES ('$users', '$pass', '$email', '$depan', '$tengah', '$belakang');";
$query = $conn->query($sql);


if ($query->num_rows == 0) {
	echo "berhasil";
	$newURL = "formlogin.php";
  header('Location: '.$newURL);
} else {
	echo "errornya".mysql_error($conn);
}

?>