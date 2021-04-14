<html>
    <head>
        <title>Profil</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
            <!---Untuk Memanggil File dan untuk menampilkan Foto!--->
            <script src="Scripts.js"></script>

            <!---Untuk CSS Bagian Navbar!-->
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
        <div class="container" style="margin-top:20px;margin-left: 500px; margin-right:500px;">
        	
                        <form action="DatabaseUpdateProfilPengajar.php" method="post">
            <div class="row">
                <div class="col-me-1">
                    <div class="card" style="width:350px">
                            <div class="col">
                                <div class="col-me">
                                    <div style="margin-top:7px"class="form-group">
                                        <div class="card-header">
                                            <label for="Profil"><h4>Profil</h4></label>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                    </div>

                               
                                    
                                    <div class="form-group">
                                        <label for="Depan">Nama Depan</label>
                                        <input type="Depan" class="form-control" name="Depan"id="Depan">
                                    </div>

                                    <div class="form-group">
                                        <label for="Tengah">Nama Tengah</label>
                                        <input type="Tengah" class="form-control" name="Tengah" id="Tengah">
                                    </div>

                                    <div class="form-group">
                                        <label for="Belakang">Nama Belakang</label>
                                        <input type="Belakang" class="form-control" name="Belakang"id="Belakang">
                                    </div>

                                    <div class="form-group">
                                        <label for="Lahir">Tempat Lahir</label>
                                        <input type="Lahir" class="form-control" name="Lahir"id="Lahir">
                                    </div>

                                    <div class="form-group">
                                        <label for="Tanggal">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="Tanggal"id="Tanggal">
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="Email" class="form-control" name="Email"id="Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="Nomor">Nomor Hp</label>
                                        <input type="Number" class="form-control" name="Nomor"id="Nomor">
                                    </div>

                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <input type="Alamat" class="form-control" name="Alamat"id="Alamat">
                                    </div>


                                        <div class="card-footer" style="float: right ; margin-right:5px">
                                            <button style="background-color:#818181; border: 1px solid #818181"type="close" class="btn btn-primary" action="dasboard.php">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>