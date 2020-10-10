 <!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan css</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
   <div class="kl">

	<div class="kotak_login">
	    <h1>LOGIN</h1>
	     <br/>



    


   <div class="info">
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	</div>
	<br>
	<br>

	

	          

	            <form method="post" action="cek_login.php">
		        <lable>Username</lable>
				<br>
		        <input  type="text" name="username"class="from_login"placeholder="Masukkan username">
                <br>
                <br>
		        <br>
				<lable>Password</lable>
				<br>
			    <input type="password" name="password"class="from_login" placeholder="Masukkan password">
				<br>
				<br>
				<br>
				<div class="tenah">
		    	<input type="submit" class="tombol_login" value="LOGIN">
		    </div>
			</form>
		 </div>
		</div>
	 </body>
</html>