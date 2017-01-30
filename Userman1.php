<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Userman1.css">
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
					<div id="mytrip"><a href="#">My Trip</a></div>
					<div id="friendMen"><a href="#">Friendlist</a></div>
					<div id="postMen"><a href="#">Posting History</a></div>
				</div>
			</div>
			</div>	

			<div id="profDetail">
				<h2>Profile Detail</h2>
				<div id="detail">
				<p>
					Username: Mboh Sopo <br>
					Full Name: Bejo Kusuma Wardana <br>	
					Gender: Other <br>
					Birth Date: 18 October 1990 <br> 
					Location: Yogyakarta <br>
					Address Jl solo no 18 <br>
					Mobile Number: 08978364921 <br>
				</p>
				</div>
			</div>

		</div>

	</div>







<?php
		include("footer.php");
	?>
</body>
</html>