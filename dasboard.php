
<html>
<head>
	<title>Dashboard</title>
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
        <body>
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

        ?></a>

        
        </ul>

				<div class="jumbotron" style="height:450px; width:1366px; background-color:#6B6B6B" >
        			<h1 class="display-4"style="color:white	">Selamat Datang...</h1>
        				<p class="lead" style="color:white">SISFO.EDU adalah jawaban bagi banyaknya mahasiswa yang selalu mengalami kesulitan pada mata kuliah dasar karena mata kuliah dasar jurusan teknik sangat viral dalam perkuliahan. Tidak sedikit yang mendapatkan nilai yang kurang baik atau bahkan banyak sekali mahasiswa yang tidak lulus pada mata kuliah tersebut.
        				<br><br>
						SISFO.EDU adalah bimbingan belajar khusus mahasiswa yang berlokasi utama di BANDUNG dan berfokus pada mahasiswa yang mengambil jurusan Sistem Informasi dengan bahan mata kuliah ajar :
						<br><br>
						Misi dari SISFO.EDU adalah membantu mahasiswa Sistem Informasi dalam memahami mata kuliah dasar dan mendapatkan nilai yang memuaskan pada mata kuliah dasar tersebut. Pada implementasinya, SISFO.EDU selalu dapat meluluskan 100% mahasiswanya dan mendapatkan nilai yang memuaskan</p>
				</div>

                    <center> <iframe width="560" height="315" src="https://www.youtube.com/embed/AwMeQJ_u73I" frameborder="0" allow="accelerometer; autoplay; encrpyted media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

						

				<div class="footer" style="background-color: red; width:1365px; height: 80px; margin-top:50px"></div>
	</body>
</html>