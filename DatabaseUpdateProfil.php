<?php 
session_start();
require_once("config.php");
    require_once("config.php");

    $username = $_SESSION['username'];
    $Depan = $_POST ['Depan'];
    $Tengah = $_POST ['Tengah'];
    $Belakang = $_POST ['Belakang'];
    $Lahir = $_POST ['Lahir'];
    $Tanggal = $_POST ['Tanggal'];
    $Email = $_POST ['Email'];
    $Nomor = $_POST ['Nomor'];
    $Alamat = $_POST ['Alamat'];


    $sql = "SELECT * FROM table_users WHERE username = '$username'";
    $query = $conn->query($sql);

    if($_SESSION["username"]) {

        $update= "UPDATE table_users SET namadepan='$Depan', namatengah='$Tengah', namabelakang='$Belakang', tempatlahir='$Lahir', tanggallahir='$Tanggal', email='$Email', nomorhp='$Nomor', alamat='$Alamat' WHERE username = '$username'";
        $new= $conn->query($update);
        if ($new) {
        echo "<div align='center'>Update Profil berhasil</div>";    
        $newURL = "dasboard.php";
        header('Location: '.$newURL);
  
        } else {
        echo "<div align='center'>Update Profil gagal</div>";
        $newURL = "HalamanProfil.php";
        header('Location: '.$newURL);
        }
    }
    else {
        echo "<div align='center'>Silahkan Login dahulu</div>";
        ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=formlogin.php"><?php
    }


?>