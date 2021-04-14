<?php 
session_start();
require_once("config.php");
    require_once("config.php");

    $username = $_SESSION['username'];
   $password = $_POST['password1'];


    $sql = "SELECT * FROM table_users WHERE username = '$username'";
    $query = $conn->query($sql);        

    if ($_POST["password1"] === $_POST["password2"]) {
        $update= "DELETE FROM table_users WHERE username = '$username'";
        $berhasil= $conn->query($update);
        if ($berhasil) {

        $newURL = "homefirst.php";
        header('Location: '.$newURL);
  
        } else {
        $newURL = "Delete.php";
        header('Location: '.$newURL);
        }
    }
    else {
        echo "<div align='center'>Password Tidak sama</div>";
        ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=dasboard.php"><?php
    }


?>