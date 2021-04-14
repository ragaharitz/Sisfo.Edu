<?php include 'config.php';

?>
<html>
    <head>
        <title>Registrasi</title>
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
        <div class="container" style="margin-top:20px;margin-left: 500px; margin-right:500px;">
            <div class="row">
                <div class="col-me-2">
                    <div class="card" style="width:350px">
                        <form action="DatabaseRegistrasi.php "method="post" onsubmit="return check()">
                            <div class="col">
                                <div class="">
                                    <div style="margin-top:7px"class="form-group">
                                        <div class="card-header">
                                            <label for="Register"><h4>Registrasi</h4></label>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" class="form-control" required name="Username"id="Username" placeholder="Enter Username">
                                    </div>

                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="Password" class="form-control" required name="Password" id="Password" placeholder="Enter Passsword">
                                    </div>

                                    <div class="form-group">
                                        <label for="Repeat">Repeat Password</label>
                                        <input type="Password" class="form-control" required name="Repeat"id="Repeat" placeholder="Enter Repeat Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="Email" class="form-control" required name="Email"id="Email" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="Depan">First Name</label>
                                        <input type="text" class="form-control" required name="Depan"id="Depan" placeholder="Enter First Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="Tengah">Middle Name (Optional)</label>
                                        <input type="text" class="form-control"  required name="Tengah"id="Tengah" placeholder="Enter Middle Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="Belakang">Last Name</label>
                                        <input type="text" class="form-control" required name="Belakang"id="Belakang" placeholder="Enter Last Name">
                                    </div>

                                        <div class="card-footer" style="float: right">
                                            <button style="background-color:#818181; border: 1px solid #818181"type="close" class="btn btn-primary" action="homefirst.php">Close</button>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </body>

<script type="text/javascript">
  function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;   
    if (email != "" && password!= "") {
      return true;
    }else{
      alert('Email dan Password harus di isi !');
      return false;
    }
  }

  function check() {
    var username = document.getElementById("Username").value;
    var email = document.getElementById("Email").value;
    var password = document.getElementById("Password").value;   
    var password2 = document.getElementById("Repeat").value;
    var depan = document.getElementById("Depan").value;
    var belakang = document.getElementById("Belakang").value;
  if (username == "" && password == "" && email == "" & password2 == "" && depan == "" && belakang == "") {
      alert ('Lengkapi bagian yang kosong!');
      return false;
     }
    else {
      alert ('Registrasi Berhasil');
      return true;
    }
    
  }

</html>