<html>
    <head>
        <title>Contact Person</title>
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
                <li> <a class = "active" href = "dasboard.php"> Home </a> </li>
                <li> <a href = "HalamanProfil.php">Edit Profil </a> </li>
                <li> <a href = "course.php"> Materi  </a> </li>
                <li> <a href = "contactperson1.php"> Contact Person </a> </li>
                <li> <a href = "ChangePassword.php"> Ubah Password </a> </li>
                <li> <a href = "Delete.php"> Hapus Akun </a> </li>
                <li> <a href = "formlogin.php"> Logout </a> </li>
			
				    <a style="color: white"> Selamat Datang: 
				    	<?php include 'config.php';
     			 			session_start();    echo $_SESSION['username'];
						?> 
						</a>
			
		    </ul>
         <div class="container" style="margin-top:50px">
                <div class="row">
                    <div class="col-md-8" style="text-align:center; margin-left:200px">
                        <h1>Hubungi Kami</h1>
                        <br>
                        <p><h2>Sesuai Komitment SISFO.EDU dalam memberikan layanan yang unggul dan profesional, SISFO EDU memastikan bahwa informasi apapun yang kalian butuhkan segera terlayani dengan menghubungi kami dibawah ini.</h2></p>
                    </div>
                    <div>
                        <div style="margin-top:50px; margin-left:300px">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1024px-LINE_logo.svg.png" style="width:40px; height:40px">
							<a href="#">@SISFO.EDU</a>
						</div>
                    </div>
					<div>
						<div style="margin-top:50px; margin-left:100px">
                            <img src="http://pngimg.com/uploads/whatsapp/whatsapp_PNG20.png" style="width:40px; height:40px">
							<a href="#">087875546059</a>
						</div>
                    </div>
					<div>
						<div style="margin-top:50px; margin-left:100px">
                            <img src="https://www.edigitalagency.com.au/wp-content/uploads/new-instagram-logo-png-transparent.png" style="width:40px; height:40px">
							<a href="#">@SISFO.EDU</a>
						</div>
                    </div>
				</div>
			</div>

			<div class="footer" style="background-color: red; width:1365px; height: 80px; margin-top:160px"></div>
            
        </body>
</html