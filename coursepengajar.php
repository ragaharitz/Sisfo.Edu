<?php

?>

<!DOCTYPE html>
<html>
<head>
  <title>Course</title>
  <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <style>{
			    margin:0;
				padding:0;
			}
			.navbar {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: red;
			}
			.navbar li {
				float:left;
			}
			.navbar li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			.navbar li:hover:not(.active) {
				background-color: gray;
			}
			.navbar li a:hover:not(.active) {
				background-color: gray;
			}
			.divparent {
				width: 1517px;
				height:295px;
			}
			.imgleft {
				float: left;
				background-color: lightgray;
				padding: 7% 10%;
				width: 30%;
				height: 82.5px;
			}
			.descright {
				float: right;
				background-color: lightgreen;
				width: 758.5px;
				height: 295px;
			}
			.descright p {
				color: white;
				font-size: 22px;
				font-family: timesnewroman;
				margin-left: 40px;
				margin-top: 60px;
			}
			.descright ul {
				color: white;
				font-size: 22px;
				margin-left: 60px;
			}
			.parentform{
				padding: 0px, auto;
				width: 605px;
				height:225px;
			}
			.form-left{
				float: left;
				width: 300px;
				height:225px;
			}
			.form-right{
				float: right;
				width: 300px;
				height: 225px;
			}
			.buttonmodify {
				background-color: blue;
				color: white;
				font-size: 24px;
				border-radius: 8px;
				border: 4px solid #302DFF;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				width: 30%;
				text-align: center;
				margin: 4px 2px;
				opacity: 0.6;
				transition: 0.3s;
				display: inline-block;
				text-decoration: none;
				cursor: pointer;
			}
			.buttonmodify:hover {
				opacity: 1;
			}
	        </style>
    </head>
        <body style = "background-color: C3FFF5">
            <ul class = "navbar"> 
                <li> <a class = "active" href = "dashboardpengajar.php"> Home </a> </li>
                <li> <a href = "HalamanProfilPengajar.php">Edit Profil </a> </li>
                <li> <a href = "coursepengajar.php"> Materi  </a> </li>
                <li> <a href = "contactperson2.php"> Contact Person </a> </li>
                <li> <a href = "ChangePasswordPengajar.php"> Ubah Password </a> </li>
                <li> <a href = "peraturan.php"> Tata Tertib </a> </li>
                <li> <a href = "formlogin.php"> Logout </a> </li>
      
            <a style="color: white"> Selamat Datang:
              <?php include 'config.php';
               
           session_start();    echo $_SESSION['username'];

        ?></a>

        
        </ul>
   
    <div class="card-deck">
        <div class="card" style="width: 18rem;margin-top: 50px">
            
            <div class="card-body">
                <h5 class="card-title">Kalkulus 1</h5>
                <h6 class="card-text"> 8 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang Matematika yang sudah dipelajari di SMA. </p>
            </div>
            <div class="card-footer">
              <a class = "active" href = "downloadkalkulus.php" style="margin-left: 120px"> Download </a> </li>
            </div>
    </div>

    <div class="card" style="width: 18rem;margin-top: 50px">
            <div class="card-body">
                <h5 class="card-title"> Dasar Sistem Operasi </h5>
                <h6 class="card-text"> 5 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang jaringan dan keamanannya. </p>
            </div>
            <div class="card-footer">
                <a class = "active" href = "downloadsisop.php" style="margin-left: 120px"> Download </a> </li>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin-top:50px">
            <div class="card-body">
                <h5 class="card-title"> Pemodelan Proses Bisnis </h5>
                <h6 class="card-text"> 7 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang bagaimana di suatu perusahaan bisa mengembangkan proses bisnis. </p>
            </div>
            <div class="card-footer">
                  <a class = "active" href = "downloadppb.php" style="margin-left: 120px"> Download </a> </li>
            </div>
        </div>

        <div class="card" style="width: 18rem;margin-top:50px">
            <div class="card-body">
                <h5 class="card-title"> Matriks & Ruang Vektor </h5>
                <h6 class="card-text"> 8 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang perhitungan. </p>
            </div>
            <div class="card-footer">
                  <a class = "active" href = "downloadmatvek.php" style="margin-left: 120px"> Download </a> </li>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<br> 
<br>

<div class="card-deck">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> Rekayasa Proses Bisnis</h5>
            <h6 class="card-text"> 5 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang proses bisnis di perusahaan. </p>
        </div>
        <div class="card-footer">
              <a class = "active" href = "downloadrpb.php" style="margin-left: 120px"> Download </a> </li>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> Pendidikan Agama Islam </h5>
            <h6 class="card-text"> 7 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang bagaimana jadi muslim yang baik </p>
        </div>
        <div class="card-footer">
              <a class = "active" href = "downloadagama.php" style="margin-left: 120px"> Download </a> </li>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> Algoritma dan Pemrograman  </h5>
            <h6 class="card-text"> 6 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang codingan. </p>
        </div>
        <div class="card-footer">
              <a class = "active" href = "downloadalpro.php" style="margin-left: 120px"> Download </a> </li>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> Pengembangan Aplikasi Web </h5>
            <h6 class="card-text"> 6 Modul </h6>
                <p class="card-text"> Ilmu yang mempelajari tentang cara membuat web beserta codingannya. </p>
        </div>
        <div class="card-footer">
              <a class = "active" href = "downloadwad.php" style="margin-left: 120px"> Download </a> </li>
        </div>
    </div>
</div>

    <div class="footer" style="background-color: red; width:1365px; height: 80px; margin-top:50px"></div>
</body>
</html>