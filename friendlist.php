<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Friendlist.css">
		<title>TripTis.com</title>
		<meta charset="utf-8">
</head>
<body>
	<?php
		include("headerLogin.php");
	?>


	<div id="mainCont">
		<div id="menuleft">
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
					<div id="mytrip"><a href="#">My Trip</a></div>
					<div id="friendMen"><a href="#">Friendlist</a></div>
					<div id="postMen"><a href="#">Posting History</a></div>
				</div>
			</div>
			</div>	


				<div id="friendlist">
				<h2>Friendlist</h2>
					
					<?php
						for ($i=0; $i < 15; $i++) { 
							echo "<div class='friend'>
									<div class='friendPP'><img src='img/1.png' alt='image'></div>
									<div class='friendName'><span>Username</span></div>
								</div>";
						}
					?>

				</div>
		</div>

	</div>







	<?php
		include("footer.php");
	?>
</body>
</html>