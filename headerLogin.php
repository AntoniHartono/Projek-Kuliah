
		<div id="logouttab"> 
			<div class="lo"> <div class="a"><a href="logout.php">Log Out</a></div></div>
			<div class="lo"> <div class="a"><a href="userman.php">Profile</a></div></div>
		</div>
		<div id="head">
		<div class = "header">
			<div class = "title">
				<div class = "logo">
					<img src="img/log.png" alt="image">
				</div>
			</div>

			<div id="navigation">
				<div id="home"> <a href="homeLogin2.php">Home</a></div>
				<div id="destInfo"><a href="destlog.php">Destination Info</a></div>
				<div id="events"><a href="eventslog.php">Events</a></div>
				<div id="trip4Us"><a href="trip4uslog.php">Trip For Us</a></div>
			</div>	

		</div>

		<div id="login">
			<div id="profile">
				<div id="profImage">
					<img src="<?php 
						$query="select * from `users` where `username`='".$_SESSION['user']."'";
      					$hasil=mysql_query($query);
      					$a=mysql_fetch_assoc($hasil);
      					echo $a['profile_pict'];
					 ?>" alt="image">
				</div>

				<div id="profInfo">
					 
						<a href="tripmate.php" id ="mate">Your Trip Mate</a> | Hi, <?php echo $_SESSION['user']; ?><br>

					
				</div>

			</div>

			<div id="update">
				<div id="updateIcon"><img src="img/l3.png" alt="image"></div>
				<div id="location"><h1>
					<?php 
						echo $a['location'];
					 ?> </h1></div>
				<div id="updateLoc"><a href="#">Update Location</a></div>
			</div>

		</div>
	</div>
