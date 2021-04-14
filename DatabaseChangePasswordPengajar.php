<?php 
session_start();
require_once("config.php");
    require_once("config.php");

    $username = $_SESSION['username'];
   $password = $_POST['password1'];


    $sql = "SELECT password FROM table_pengajar WHERE username = '$username'";
    $query = $conn->query($sql);        

    if ($_POST["password1"] === $_POST["password2"]) {
        $update= "UPDATE table_pengajar SET password='$password' WHERE username = '$username'";
        $berhasil= $conn->query($update);
        if ($berhasil) {

        $newURL = "dashboardpengajar.php";
        header('Location: '.$newURL);
  
        } else {
        $newURL = "ChangePasswordPengajar.php";
        header('Location: '.$newURL);
        }
    }
    else {
        echo "<div align='center'>Password Tidak sama</div>";
        ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Profile.php"><?php
    }


?>