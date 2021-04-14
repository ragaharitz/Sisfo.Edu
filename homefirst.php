<!DOCTYPE html>
<html>
<head>
	<title> Tubes </title>

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

			    <li> <a href ="homefirst.php"> Home </a> </li>
                <li> <a href = "HalamanRegistrasi.php"> Register  </a> </li>
			    <li> <a href = "formlogin.php"> Login </a> </li>
			    <li> <a href = "ContactPerson.php"> Contact Person </a> </li>

		    </ul>

            <div id="demo" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
  				<ul class="carousel-indicators">
    				<li data-target="#demo" data-slide-to="0" class="active"></li>
    				<li data-target="#demo" data-slide-to="1"></li>
  				</ul>

  			<!-- The slideshow -->
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="https://www.dictio.id/uploads/db3342/original/3X/1/d/1d768d584d68f91f33b4978c4eebc2c0e58b4a53.jpg" style="width:1365px; height:400px"> </div>
    			<div class="carousel-item">
      				<img src="https://www.silabus.web.id/wp-content/uploads/2018/05/Pengertian-Belajar-Ciri-ciri-Belajar-dan-Prinsip-Belajar-626x393.jpg" style="width:1365px; height:400px"></div>
  			</div>

  			<!-- Left and right controls -->
  			<a class="carousel-control-prev" href="#demo" data-slide="prev">
    			<span class="carousel-control-prev-icon"></span>
  			</a>
  			<a class="carousel-control-next" href="#demo" data-slide="next">
    			<span class="carousel-control-next-icon"></span>
  			</a>

		</div>

            <div class="container" style="margin-top:50px">
                <div class="row">

                    <div class="col-md-4">
                        <h2><img src="https://telkomuniversity.ac.id/wp-content/uploads/2019/11/WhatsApp-Image-2019-11-04-at-10.27.25-PM-1170x750.jpeg" style="width:350px; height:150px"></h2>
                        <p>Mahasiswa Tel-U Ciptakan Alat Camping Yang “New To The World”
						   <br>
						   BANDUNG, Telkom University – 3 orang mahasiswa Fakultas Rekayasa Industri Telkom University yakni Muhammad Fakhrul Mukmin, Ryan Gamas Agromega dan Nurul Taqwa,.. </p>
                        <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">View details &raquo;</button></p>

						<div class="container">
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        						<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="width:427px;height:100px">
          							<div class="modal-content">

            						<div class="modal-header" >
              							<h5 class="modal-title" id="exampleModalLongTitle">Prestasi Mahasiswa</h5>
                							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  								<span aria-hidden="true">&times;</span>
                							</button>
            						</div>

            						<div class="modal-body">
              							<img src="https://telkomuniversity.ac.id/wp-content/uploads/2019/11/WhatsApp-Image-2019-11-04-at-10.27.25-PM-1170x750.jpeg" style="width:400px; height:95px">
              							<p><h3><b>Mahasiswa Tel-U Ciptakan Alat Camping Yang “New To The World”</b></h3>
										   <h6><b>BANDUNG, Telkom University</b> <– 3 orang mahasiswa Fakultas Rekayasa Industri Telkom University yakni Muhammad Fakhrul Mukmin, Ryan Gamas Agromega dan Nurul Taqwa, 
										   	   berhasil meraih juara pertama pada kompetisi Industrial Design Competition (INDISCO) 2019 yang digelar Universitas Diponegoro pada 1 – 3 November 2019 di Kampus 
											   UNDIP, Semarang. Kompetisi bertaraf Internasional yang digelar oleh Himpunan Mahasiswa Teknik Industri UNDIP ini ditahun ke 11 mengusung tema “Space-saving and 
											   Eco-friendly Design for Standardized Products’ Improvement”. Fakhrul saat ditemui di Telkom University menceritakan bahwa timnya dalam kompetisi ini membuat sebuah 
											   alat bantu guna memudahkan dalam menjalani aktifitas outdoor.

											   “disini kami membuat sebuah tongkat yang fungsi nya untuk camping, hiking atau aktivitas outdor lainnya, selain itu tongkat ini juga bisa digunakan menjadi tenda, 
											   sleeping bag dan fungsi yang lainnya guna memudahkan para pencinta aktifitas outdoor.” Jelasnya.Melalui persiapan selama kurang lebih 5 bulan, Fakhrul dan tim mulanya 
											   merancang produk ini atas masalah yang dialami pendaki salah satunya physical weakness, dimana beban yang harus dibawa pendaki cukup banyak, mulai dari tas hingga tenda.
											   
											   “Awal mulanya kami melihat masalah yang sering dialami oleh para pencinta alam yang sering mendaki gunung dengan beban yang banyak, mulai dari tas, tenda, sleeping bag dan 
											   sebagainya, dari masalah tersebut kami ingin mencarikan solusi terbaik yang bisa dimanfaatkan oleh para pendaki, keunggulan produk ini selain dari fungsi, produk yang kami 
											   bikin ini bisa dibilang kategori produk “New To The World”. Jelasnya. Fakhrul berharap agar produk yang diciptakan bersama timnya ini dapat bermanfaat untuk masyarakat 
											   khususnya yang menyukai aktifitas outdoor. 
											</h6>  
										</p>
            						</div>

            						<div class="modal-footer">
              							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            						</div>

          							</div>
        						</div>
      						</div>
   					 	</div>
                    </div>

                	<div class="col-md-4">
                        <h2><img src="http://sdm.ugm.ac.id/web/wp-content/uploads/2014/10/berprestasi-300x167.jpg" style="width:350px; height:150px"></h2>
                        <p>Kerja Tim terkadang menjadi sebuah kegiatan yang masih banyak dihindari oleh beberapa orang dilingkungan pekerjaan. namun,
   						   mengapa orang-orang tersebut masih mempertahankan sikap seperti itu? padahal, banyak sekali...</p>
                        <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View details &raquo;</button></p>

						<div class="container">
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        						<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="width:427px;height:100px">
          							<div class="modal-content">

            						<div class="modal-header" >
              							<h5 class="modal-title" id="exampleModalLongTitle">Kerja Tim</h5>
                							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  								<span aria-hidden="true">&times;</span>
                							</button>
            						</div>

            						<div class="modal-body">
              							<img src="http://sdm.ugm.ac.id/web/wp-content/uploads/2014/10/berprestasi-300x167.jpg" style="width:400px; height:95px">
              							<p>Kerja Tim terkadang menjadi sebuah kegiatan yang masih banyak dihindari oleh beberapa orang dilingkungan pekerjaan. namun,
   						   				   mengapa orang-orang tersebut masih mempertahankan sikap seperti itu? padahal, banyak sekali keuntungan yang dapat diterima 
										   dari bekerja sama dalam satu tim, baik untuk diri seseorang dan juga organisasi. Berikut beberapa penjelasan mengapa bekerja 
										   sama sangat penting dilakukan di lingkungan kerja. <br>
										   1. Meningkatkan Efisiensi 
										   	  <br>-> Ketika bekerja dalam tim, anda akan bekerja menuju tujuan yang sama secara bersamaan. meningkatkan 
										   	  kerja sama tim dalam lingkungan kerja juga akan membantu perusahaan atau departemen anda untuk mengambil pekerjaan tambahan 
											  dan akhirnya mendapatkan keuntungan atau bonus tanpa harus menambah pegawai lagi.<br>
										   2. Mendapatkan Ide-ide Baru 
										   	  <br>-> Salah satu keuntungan terbesar yang akan anda terima setelah melakukan kerja sama tim adalah anda 
										   	  dan perusahaan akan mendapatkan inspirasi serta ide-ide baru dari diskusi bersama tim. Hal tersebut juga akan sangat menguntungkan
											  karena dapat membantu perusahaan anda menciptakan sebuah solusi yang optimal.<br>
										   3. Mendapatkan Pengalaman Belajar<br>
										   4. Kemudahan Berkomunikasi<br>
										   5. Membagikan Beban Kerja<br>
										   6. Dukungan Jaringan<br>
										</p>
            						</div>

            						<div class="modal-footer">
              							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            						</div>

          							</div>
        						</div>
      						</div>
   					 	</div>
                    </div>
					
                	<div class="col-md-4">
                    	<h2><img src="https://www.kanalaceh.com/wp-content/uploads/2017/03/prestasi.jpg"style="width:350px; height:150px"></h2>
                    	<p>Prestasi berasal dari dari bahasa belanda yaitu prestatie. dalam bahasa indonesia yaitu hasil usaha.
						   secara umum prestasi berkenaan dengan aspek pengetahuan sedangkan dalam hasil belajar sendiri dari aspek pembentukan
						   watak peserta didik. ... </p>
                    	<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">View details &raquo;</button></p>

						<div class="container">
							<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        						<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="width:427px;height:100px">
          							<div class="modal-content">

            						<div class="modal-header" >
              							<h5 class="modal-title" id="exampleModalLongTitle">Kerja Tim</h5>
                							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  								<span aria-hidden="true">&times;</span>
                							</button>
            						</div>

            						<div class="modal-body">
              							<img src="https://www.kanalaceh.com/wp-content/uploads/2017/03/prestasi.jpg" style="width:400px; height:95px">
              							<p>Prestasi berasal dari dari bahasa belanda yaitu prestatie. dalam bahasa indonesia yaitu hasil usaha.
						   				   secara umum prestasi berkenaan dengan aspek pengetahuan sedangkan dalam hasil belajar sendiri dari aspek pembentukan
						   				   watak peserta didik. secara terminologi prestasi adalah hasil yang telah dicapai setelah melakukan berbagai usaha yang
										   sebaik-baiknya. macam-macam prestasi yaitu : <br>
										   1. Prestasi Belajar 
										   <br>->hasil yang diperoleh atas usaha belajar. contohnya : belajar disekolah, juara umum.<br>
										   2. prestasi kerja 
										   <br>-> hasil yang didapatkan dari usaha kerja yang telah dilakukan, contoh : naik jabatan. <br>
										   3. prestasi seni 
										   <br>-> hasil yang diperoleh dari usaha seni. contoh : juara nyanyi, juara seniman.<br>
										   4. prestasi olahraga
										   <br>-> hasil yang diperoleh atas usaha dan kerja keras yang terdapat dibidang olahraga. contoh : juara 1 lomba renang.
										</p>
            						</div>

            						<div class="modal-footer">
              							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            						</div>

          							</div>
        						</div>
      						</div>
   					 	</div>
					</div>
            	</div>
			</div>
			
			<div class="footer" style="background-color: red; width:1365px; height: 80px; margin-top:50px"></div>
		
		</body>
</html>