<?php 

	session_start();
	if(isset($_SESSION['user'])){
		header("location: homelogin2.php");
	}
	
 ?>

 <?php

	if(isset($_POST['username'])&&isset($_POST['pass'])){
		include("konak.php");
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$query = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = MD5('".$pass."')";
		$hasil = mysql_query($query);

		$valid = mysql_num_rows($hasil);

		if($valid == 1){
			$_SESSION['user']=$username;
			header("location: homelogin2.php");
		} else {
			header("location: index.php");
		}

	}
	
	
?>

<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="header.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<title>TripTis.com</title>
		<meta charset="utf-8">
		<?php 
			include("slidehead.php");
		 ?>

	</head>

	<body>
	


		<?php
			include("header.php");
			include("slide.php");
		?>

		<div class ="content">
			<h2>Destination Info</h2>
		</div>
			<div class="isi">
				<?php 
					for ($i=7; $i < 10; $i++) { ?>
						<div class="contentShow">
							<div class="contentShowImage" >
								<a href="destopen.php"><img src=<?php echo "img/".$i.".jpg"; ?> alt=<?php echo "img/".$i.".jpg"; ?>></a>
							</div>

							<div class="contentShowDesk">
								<p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh</p>					
							</div>
						</div>
				<?php	} ?>

			</div>
		

		<div class ="content">
			<h2>Events</h2>
		</div>
			<div class="isi">
				<?php 
					for ($i=7; $i < 10; $i++) { ?>
						<div class="contentShow">
							<div class="contentShowImage" >
								<a href="eventsopen.php"><img src=<?php echo "img/".$i.".jpg"; ?> alt=<?php echo "img/".$i.".jpg"; ?>></a>
							</div>

							<div class="contentShowDesk">
								<p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh</p>					
							</div>
						</div>
				<?php	} ?>

			</div>
		<?php
			include("footer.php");
		?>

	</body>


	</html>





