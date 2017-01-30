<?php
	session_start();
?>

<?php 
  include("konak.php");
?>

<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="homeLogin2.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<title>TripTis.com</title>
		<meta charset="utf-8">
    	<?php 

			include("headerLoginhead.php");
			include("slidehead.php");
    	 ?>
	</head>

	<body>
		 
		<?php
			include("headerLogin.php");
			include("slide.php");
		?>
		



		<div class ="content">
			<div class="make">
				<a href="forminfo.php">Share Info</a>
			</div>
			<h2>Destination Info</h2>
		</div>
		<div class="isi">
				<?php 
					for ($i=7; $i < 10; $i++) { ?>
						<div class="contentShow">
							<div class="contentShowImage" >
								<a href="destopencom.php"><img src=<?php echo "img/".$i.".jpg"; ?> alt=<?php echo "img/".$i.".jpg"; ?>></a>
								
							</div>

							<div class="contentShowDesk">
								<p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh</p>					
							</div>
						</div>
				<?php	} ?>

			</div>



		<div class ="content">
			<div class="make">
				<a href="formevent.php">Share Events</a>
			</div>
			<h2>Events</h2>
			
		</div>
		<div class="isi">
				<?php 
					for ($i=7; $i < 10; $i++) { ?>
						<div class="contentShow">
							<div class="contentShowImage" >
								<a href="eventsopencom.php"><img src=<?php echo "img/".$i.".jpg"; ?> alt=<?php echo "img/".$i.".jpg"; ?>></a>
								
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