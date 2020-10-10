<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body>
     <header>
		    <br>
      <div>
	     <ul>
	  		<li>
	  	<a href="menu/index.php  ">BERANDA</a>
	  	    </li>
	  	    <li>
	  	<a href="#">ISI</a>
	  	    </li>
	  	    <li>
	  	<a href="#">KONTAK</a>   	
	  	    </li>
	  	    <li>
	  	<a href="logout.php">LOGOUT</a>
	  	    </li>
	  	</ul>
	         <br>
	         <br>
	         <br>
    <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}
	?>
     <h2>Selamat datang <br>
     <?php echo $_SESSION['username']; ?>! 
     <br>anda telah login</h2>
      </div>
	 </header>
           <br/>
	       <br/>
   </body>
</html>