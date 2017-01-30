<?php 
	session_start();
 ?>
 <?php 
  include("konak.php");
?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="eventopencom.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<title>TripTis.com</title>
		<meta charset="utf-8">
		<?php 
			include("headerloginhead.php");
		 ?>
     <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow)  instead for release -->
        <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.js + jssor.slider.js) -->
        <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
        </script>
        
         <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)abu
                .jssorb05 div:hover     (normal mouseover)oren
                .jssorb05 .av           (active)putih
                .jssorb05 .av:hover     (active mouseover)oren
                .jssorb05 .dn           (mousedown)item
                */
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    background: url(img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }

                .jssorb05 div {
                    background-position: -7px -7px;
                }

                .jssorb05 div:hover, .jssorb05 .av:hover {
                    background-position: -37px -7px;
                }

                .jssorb05 .av {
                    background-position: -67px -7px;
                }

                .jssorb05 .dn, .jssorb05 .dn:hover {
                    background-position: -97px -7px;
                }
        </style>
    
	</head>

	<body>

		<?php 
			include("headerLogin.php");
		 ?>

		


		<div id="cont">

			<div id="mainCont">
			<div id="bawahheader">

				<h1>Pulau Bawean: Antara Legenda Dan Keindahan </h1>

					<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 98%; height: 45%; overflow: hidden;">
                
                <!-- Slides Container -->
                <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 445px; overflow: hidden;">
                    <div>
                        <img data-u="image" src="img/3.jpg" alt="image"/>
                    </div>
                    <div>
                        <img data-u="image" src="img/6.jpg" alt="image"/>
                    </div>
                    <div>
                        <img data-u="image" src="img/9.jpg" alt="image"/>
                    </div>
           
                </div>

                <!-- Bullet Navigator Skin Begin -->
                
                <!-- bullet navigator container -->
                <div data-u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
                </div>
                <!-- Bullet Navigator Skin End -->
                
                <a style="display: none" href="http://www.jssor.com">javascript carousel</a>
            </div>

				<div id="map">
					<a href="#">Look On Map</a>
				</div>

				<div id="explain">
					Location: Bali
					<br>
					Date: 10 - 15 October 2014
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
						<h2>Hot Destination</h2>
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