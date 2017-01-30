<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="PostHistory.css">
		<title>TripTis.com</title>
		<meta charset="utf-8">
</head>
<body>
	<?php
		include("headerLogin.php");
	?>

	<div id="mainCont">
		<div id="menuleft">

			<div id="photoLeft"><img src="img/1.png" alt="image"></div>
			<h2>Mboh Sopo</h2>
			
			<div class="menleft">
				<button>Edit Profile</button>
			</div>
			<div class="menleft">
				<button>Message</button>
			</div>
			<div class="menleft">
				<button>Change Password</button>
			</div>
		</div>

		<div id="UserMan">
			
			<div id="userManHead">
			<div id="photo"><img src="img/1.png" alt="image"></div>
			<div id="rightMenu">
				<div id="username">
					<h2>Mboh Sopo's Profile</h2>
				</div>
				<div id="profMenu">
					<div id="prof"> <a href="#">Profile</a></div>
					<div id="mytripMen"><a href="#">My Trip</a></div>
					<div id="friendMen"><a href="#">Friendlist</a></div>
					<div id="postMen"><a href="#">Posting History</a></div>
				</div>
			</div>
			</div>	

			<div id="mytrip">
				<div class="mantrip">
					
					<div class="mantripTitle">
						<h2>Destination Info</h2>
					</div>

					<?php
						for ($i=0; $i < 4; $i++) { 
							echo "<div class='mantripIsi'>
						<div class='mantripImg'><img src='img/1.png' alt='image'></div>
						<div class='mantripJudul'><h3><a href='#'>Judul Destination Post</a></h3></div>
						<div class='mantripDetail'><img src='img/l3.png' class='mantripIcon' alt='image'> Location: Bali</div>
						<div class='mantripDetail'><img src='img/price2.png' class='mantripIcon' alt='image'> Price: Rp 1000.000</div>
					</div>";
						}
					?>

				</div>

				<div class="mantrip">
					
					<div class="mantripTitle">
						<h2>Events</h2>
					</div>
					
					

					<?php
						for ($i=0; $i < 4; $i++) { 
							echo "<div class='mantripIsi'>
						<div class='mantripImg'><img src='img/1.png' alt='image'></div>
						<div class='mantripJudul'><h3><a href='#'>Judul Event Post</a></h3></div>			
						<div class='mantripDetail'><img src='img/l3.png' class='mantripIcon' alt='image'> Location: Bali</div>
						<div class='mantripDetail'><img src='img/date1.png' class='mantripIcon' alt='image'> Date 15 October 2014</div>
					</div>";
						}
					?>

				</div>















			</div>

		</div>

	</div>






	<?php
		include("footer.php");
	?>
</body>
</html>