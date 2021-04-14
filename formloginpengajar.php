<html>
<head>
	<title>Form Login</title>
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
				width: 200px;
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
			    <li> <a href = "formloginpengajar.php"> Login </a> </li>
			    <li> <a href = "ContactPerson.php"> Contact Person </a> </li>

		    </ul>
	<div class="middle" style="background-color: white; width:0px; height :745px;">
		<img src="https://d2cxe5gf8hqyn9.cloudfront.net/wp-content/uploads/2018/05/payroll-background.jpg" style="width:1349px; height:745px">
		<div class="logincard" style="height: 250px;width: 230px;  solid #999;float: center;position: absolute;margin-top: -200px;margin-left: 350px;left: 50%;top: 50%;">
		  <div class="loginheader" style="background-color: red; width: 230px; height: 80px; padding-top: 10px; color: white;padding-left: 15px;">
			<h4>LOGIN AREA</h4> 
			for registered lecturers
			<br><br>

			--------------------------
		  </div>
		 	<div class="loginbody" style="background-color: red; height: 100px;">
		 		<div class="loginbody" style="background-color: red; height: 150px; ">
		 		  <ul class = "navbar">
		 		  <li> <a href = "formlogin.php"> Mahasiswa  </a> </li>
			   	 <li> <a href = "formloginpengajar.php"> Pengajar  </a> </li>
         		</ul>
     			<form style="padding-left: 15px;" method="POST" action="DatabaseLoginPengajar.php">
     				<br>
					<input type="text" name="username" placeholder="Masukan Username">
					<br><br>
					<input type="password" name="password" placeholder="Masukan Password">
					<br><br>
					<input onclick="login()" type="submit" value="Login">
				</form>
			</div>
			<div class="loginfooter" style="padding-top: 10px; width: 230px; height: 50px; background-color: red; text-align: center;">		
		  </div>
     	</div>
     </div>
	<div class="footer" style="background-color: red; width:1349px; height :80px;">
    <script>
			function login() {
				var user = document.getElementById("username").value;
				var pass = document.getElementById("password").value;
				if (user != " " pass != " ") {
					alert("Username atau Password Salah");
					return true;
				}
			}
		</script>
</body>
</html>