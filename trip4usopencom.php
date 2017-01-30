<?php 
	session_start();
 ?>
 <?php 
  include("konak.php");
?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Trip4UsOpenCOM.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<title>TripTis.com</title>
		<meta charset="utf-8">
		<?php 

			include("headerLoginhead.php");
    	 ?>
		<script>

	jQuery(document).ready(function ($) { 

			$("#slide2").hide();
			$("#slide3").hide();

		$("#img1").click(function(){
		$("#slide").fadeIn(400);
		 		$("#slide2").hide();
			$("#slide3").hide();
		})

		 $("#img2").click(function(){
		
			$("#slide").hide();
		 		$("#slide2").fadeIn(400);
			$("#slide3").hide();
		})

		 $("#img3").click(function(){
		$("#slide").hide();
		 		$("#slide2").hide();
			$("#slide3").fadeIn(400);
		})
		 	/* ----------------------------slide gede ----------------------------*/
			$("#gede").hide()
			$("#gede1").hide()
			$("#gede2").hide()
			$("#gede3").hide()
			$("#gede").click(function(){
				$("#gede").hide();

			})

			$("#slide").click(function(){
				$("#gede").show();
				$("#gede1").show();
				$("#gede2").hide()
				$("#gede3").hide()

			})
				$("#slide2").click(function(){
				$("#gede").show();
				$("#gede2").show();
				$("#gede1").hide()
				$("#gede3").hide()

			})
				$("#slide3").click(function(){
				$("#gede").show();
				$("#gede3").show();
				$("#gede2").hide()
				$("#gede1").hide()

			})
	});

		</script>
	</head>
	<body>
		<?php
			include("headerLogin.php");
			?>
				<div id="gede">
					<img class="gedegambare" id="gede1" src="img/4.jpg" alt="image">

					<img class="gedegambare" id="gede2" src="img/7.jpg" alt="image">
				
					<img class="gedegambare" id="gede3" src="img/8.jpg" alt="image">

		</div>
		<div id="cont">

			<div id="mainCont">
			<div id="bawahheader">
				<h1>Judul Postingan Trip</h1>

				<div id="imageSlide">
					<img id="slide" src="img/4.jpg" alt="image">
					<img id="slide2" src="img/7.jpg" alt="image">
					<img id="slide3" src="img/8.jpg" alt="image">
					

				</div>
			

				<div id="choose">
					<img id="img1" src="img/4.jpg" alt="image">
					<img id="img2" src="img/7.jpg" alt="image">
					<img id="img3" src="img/8.jpg" alt="image">
				</div>

				<div id="map">
					<a href="#">Look On Map</a>
				</div>

				<div id="explain">
					Location: Bali
					<br>
					Max Traveler: 0/7
					<br>
					Date: 20 October 2014
				</div>

				<div id="destStory">
					<p>
						Masih ingat  heboh  penamaan KRI Usman Harun? Tak dinyana si pemberani Harun Thohir  yang  menuai kontroversi karena namanya dipakai sebagai nama kapal perang itu adalah orang Bawean. Ya, pulau yang berada di Laut Jawa dan termasuk dalam wilayah Kabupaten Gresik JawaTimur itu memang dikenal luas di Singapura dan  Malaysia sebagai tanah asal para pelaut yang bekerja di kapal2 mereka. Orang Bawean dan kawasan pemukiman mereka di kedua negara jiran itu mendapat julukan sebagi  Orang Boyan dan Kampung Boyan.
					</p>
					<p>
						Warna  lain  dalam  kegiatan  wisata  di pulau  yang  nyaris  bulat  bentuknya  ini,  adalah wisata yang agak  bernuansa  alam  liar. Seperti  ke  pulau Noko, Gili Noko  dan mendaki  bukit  batu  pualam menuju  Tanjung Ghe’eng.  Di pulau gosong seperti  Noko  pengunjung  bisa  snorkeling  dan jika cuaca  mendukung bisa lanjut berlayar ke Pulau Gili Noko yang juga memiliki kecantikan luar biasa di alam bawah airnya. Karena gelombang laut sedang tinggi, sekitar  1,5-2 meter,  kami  tidak  bisa mencapai  Pulau Gili Noko  dan  cukup puas menikmati  hamparan  pasir putih dan laut jernih di  Pulau Noko.
					</p>
					<p>
						Sedikit  lebih liar adalah  menembus  jalan  desa, jalan setapak  dan  mendaki  bukit  batu  marmer  menuju  bukit  batu  karang yang cukup berbahaya jika  lengah sedikit saja saat melangkah. Tanjung Ghe’eng.  Pemandangan yang fantastis  bisa dinikmati  dari  puncak bukit ini.  Ikan-ikan  dan terumbu karang bisa dilihat dari  atas bukit.  Nampak  beberapa gua yang menanti  dieksplorasi karena  keelokan  sekitarnya.  Perbukitan  yang  ada di sekeliling Tanjung  Ghe’eng menghamparkan  nuansa  alam  yang  tak kalah  indah  seperti  di Tanah Lot Bali saat matahari mulai terbenam. 
					</p>
			</div>

			</div>

			<div id="comment">
				<div id="comTitle">
					<h2>Comments</h2>
				</div>

				<?php
					for ($i=0; $i < 3; $i++) { 
						$com = "sangat bagus sekali mamen muah";
						echo "		
						<div class='comIsi'>
							<div class='comImage'>
								<img src='img/1.png' alt='image'>
								<h3>Username</h3>
							</div>

							<div class='isi'>
								<p>$com</p>
							</div>

							<div class='comTanggal'>
								<h3>20-10-2014</h3>
							</div>

						</div>";
					}
				?>

				<div id="comNew">
					<h2>Post Your Comment</h2>
					

					<div id="comNewText">
      					<textarea name="description" rows="14" cols="80"></textarea>
					</div>

					<div id="butCom">
						<button id="btnWrite">Reply</button>
					</div>

				</div>
			</div>
			</div>

			<div id="right">
				   <div id="kotaksearch">
            <h1 id="judul">Search Your Trip</h1>
            <br>

            <div id="quetion2">
                Location
                <br><br>
                Price
            </div>

            <div id="answer">
                <input type="text" name="loca"  id="loc"><br><br>
                <select id="price">
                    <option value="pr">Free</option>
                    <option value="pr">Under Rp 500.000,00</option>
                    <option value="pr">Under Rp 1.000.000,00</option>
                    <option value="pr">Under Rp 1.500.000,00</option>
                    <option value="pr">above 1.500.000,00</option>
                </select>
            </div>
            <div id="buton"><input type="submit" value="Search" ></div>

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

		</div>
		
	<?php
		include("footer.php");
	?>


		


	</body>

</html>