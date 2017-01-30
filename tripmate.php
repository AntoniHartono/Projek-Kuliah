<?php 
	session_start();
 ?>
<?php 
  include("konak.php");
?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="tripmate.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<title>TripTis.com</title>
		<meta charset="utf-8">
<?php 

			include("headerLoginhead.php");
    	 ?>
	</head>
	<body>
		<?php 
			include("headerLogin.php");
		?>


<div id="judul">
	<H7>Find Your Friends To Travelling Together</H7>
</div>


<div id="isi">
<div id="fri">Friends On My Location</div>


<form name="tripmate" action="grup.php" method="post">
<div class="container">
    <input type="checkbox" /> Agus <br />
    <input type="checkbox" /> Budi <br />
    <input type="checkbox" /> Cepot <br />
    <input type="checkbox" /> Dodol <br />
    <input type="checkbox" /> Edward <br />
    <input type="checkbox" /> Fang Fang <br />
    <input type="checkbox" /> Gentolet <br />
    <input type="checkbox" /> Hudin <br />
    <input type="checkbox" /> Ijah <br />
    <input type="checkbox" /> Juki <br />
</div>

<p>
    <input type="Submit" value="Let's Travel Together" id="grupbutton" />
</p>
</form>
<br>
</div>

<div id="ok">
 <form name="input" action="tripmate.php" method="get">
    Choose Another Location : <input type="text" name="user" placeholder="Yogyakarta">
    <input type="submit" value="Find">
</form>
</div>

		
	<?php 
			include("footer.php");
	?>


		


</body>

</html>