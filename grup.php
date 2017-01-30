<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="groupchat.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<title>TripTis.com</title>
		<meta charset="utf-8">
			<?php 

			include("headerLoginhead.php");
		 ?>
		<script >

    $(document).ready( function() {

      
      $("#ta").click(function() {
        $("#ta").val("");
    });

    });

		</script>
</head>
<body>
	<?php 
		include("headerLogin.php");
	 ?>

	<div id="friendlist">
				<h2>Your Friends</h2>
					
					<?php
						for ($i=0; $i < 105; $i++) { 
							echo "<div class='friend'>
									<div class='friendPP'><img src='img/user.jpg' alt='image'></div>
									<div class='friendName'><span>Username</span></div>
								</div>";
						}
					?>

				</div>
		</div>

	</div>


	<div id="chatbox">
		<div id="isi">
	Your Message : <br><br><br>
	<textarea  id="ta" name="description" rows="20" cols="100"> Write Your Message to your friends here </textarea>
		</div>
	</div>
     


	<?php
		include("footer.php");
	?>
</body>
</html>