<?php 

	session_start();
	if(isset($_SESSION['user'])){
		header("location: homelogin2.php");
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Event.css">
		<link rel="stylesheet" type="text/css" href="header.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<meta charset="utf-8">
	<title>TripTis.com</title>
	<?php 
			include("slidehead.php");
		 ?>
	
</head>
<body>

		<?php 
			include("header.php");
			include("slide.php");
		 ?>

	<div id="content">

		<div id="judultengah">
			<h2>Event Around You</h2>
		</div>

		<div id="con">

		<div class="tengahkanan">
			<div class="gambar">
						<img src="img/1.png" alt="image">
			</div>
			<div class="judul"><h3><a href='eventsopen.php'>Judul Event</a></h3></div>
			<div class="text"><p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh, lelah ataupun bosan dengan suasana yang formal dan serius dalam kampus. Selain itu pelajaran atau matakuliah juga membuat mahasiswa terus berpikir tanpa henti. </p></div>

		</div>

		<div class="tengahkiri">
			<div class="gambar">
						<img src="img/1.png" alt="image">
			</div>
			<div class="judul"><h3><a href='eventsopen.php'>Judul Event</a></h3></div>
			<div class="text"><p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh, lelah ataupun bosan dengan suasana yang formal dan serius dalam kampus. Selain itu pelajaran atau matakuliah juga membuat mahasiswa terus berpikir tanpa henti. </p></div>
		</div>
		
			<div class="tengahkanan">
			<div class="gambar">
						<img src="img/1.png" alt="image">
			</div>
			<div class="judul"><h3><a href='eventsopen.php'>Judul Event</a></h3></div>
			<div class="text"><p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh, lelah ataupun bosan dengan suasana yang formal dan serius dalam kampus. Selain itu pelajaran atau matakuliah juga membuat mahasiswa terus berpikir tanpa henti. </p></div>

		</div>

		<div class="tengahkiri">
			<div class="gambar">
						<img src="img/1.png" alt="image">
			</div>
			<div class="judul"><h3><a href='eventsopen.php'>Judul Event</a></h3></div>
			<div class="text"><p>Kegiatan belajar-mengajar dalam jenjang perkuliahan tidaklah sama seperti pada jenjang-jenjang sebelumnya. Kegiatan belajar-mengajar dalam jenjang ini tentu saja terkadang membuat mahasiswa jenuh, lelah ataupun bosan dengan suasana yang formal dan serius dalam kampus. Selain itu pelajaran atau matakuliah juga membuat mahasiswa terus berpikir tanpa henti. </p></div>
		</div>
		

		</div>

	</div>
			
			
		<?php 
			include("footer.php");
		 ?>


</body>
</html>