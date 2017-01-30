<?php 

	session_start();
	if(isset($_SESSION['user'])){
		header("location: homelogin2.php");
	}
	
 ?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Trip4Us.css">

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



	<div id="cont">
		<div id ="content">
			<div class="judul">
				<h2>Trip Around You</h2>
			</div>
		
			<?php
				for ($i=0; $i < 3; $i++) { 
					$desk = "Masih ingat  heboh  penamaan KRI Usman Harun? Tak dinyana si pemberani Harun Thohir  yang  menuai kontroversi karena namanya dipakai...";
					echo "<div class='destInfo'>
				<div class='destImage'><img src='img/1.png' alt='image'></div>

				<div class='destJudul'><h3><a href='trip4usopen.php'>Judul Postingan Trip</a></h3></div>
				
				<div class='destDesk'><p>$desk</p></div>
				</div>";
				}
			?>
		</div>

		<div id="hotDest">
			<div id="hotJudul">
				<h2>Hot Trip</h2>
			</div>

			<?php
			for ($i=0; $i < 5; $i++) { 
				$desk = "Pasar Kembang";
				echo 
				"<div class='hotDestInfo'>
					<div class='hotImage'>
						<img src='img/1.png' alt='image'>
					</div>

					<div class='hot'>
						$desk
					</div>
				</div>";

			}
			?>


		</div>

		</div>


	<?php
			include("footer.php");
		?>


	</body>

</html>