<?php 
  session_start();
 ?>

<?php 
  include("konak.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Userman.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
		<title>TripTis.com</title>
    <meta charset="utf-8">
				<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/message.js"></script>
  <?php 

      include("headerLoginhead.php");
  ?>
<script>

$(document).ready( function() {

      $("#um").hide();
      $("#ps").hide();
      $("#rm").hide();
      $("#adr").hide();
      $("#loc").hide();
      $("#password").hide();
      $("#repassword").hide();
      $("#pas").hide();

    $("#cp").click(function() {
        $("#pas").show();
        $("#password").show();
        $("#repassword").show();
        $("#cp").hide();
         
    });
    $("#usernamecp").click(function() {
        $("#usernamecp").val("");
    });
    $("#password").click(function() {
        $("#password").val("");
    });
    
    $("#repassword").click(function() {
        $("#repassword").val("");
    });
      
});
function validateForm() {
  var error = 0;

    var y = document.forms["myForm"]["username"].value;
    if (y==null || y=="" || y=="username") {
        $("#um").show();


       error++;
    }
    var y = document.forms["myForm"]["password"].value;

    if (y==null || y=="" || y=="password") {
         $("#ps").show();
         error++;
     }
     var x = document.forms["myForm"]["password"].value;


    if(x!=y){
        $("#ps").show();
        error++;
    }
    var y = document.forms["myForm"]["repassword"].value;
  
    if (y==null || y=="" || y=="retypepassword") {
         $("#ps").show();
         error++;
     }
    var y = document.forms["myForm"]["realname"].value;
    if (y==null || y=="" ) {
         $("#rm").show();
         error++;
     }
       var y = document.forms["myForm"]["address"].value;
    if (y==null || y=="") {
         $("#adr").show();
         error++;
     }
       var y = document.forms["myForm"]["loca"].value;
    if (y==null || y=="") {
         $("#loc").show();
         error++;
     }

    if(error>0){
      return false;
    }

}
</script>
</head>
<body>
  <?php 
    include("headerLogin.php");
   ?>


	<div id="mainCont">
		

		<div id="UserMan">
			
			<div id="userManHead">
			<div id="photo"><img src="img/user.jpg" alt="image"></div>
			<div id="rightMenu">
				<div id="username">
					<h2>Mboh Sopo's Profile</h2>
				</div>
				<div id="profMenu">
					<div id="prof"> <a href="#">Profile</a></div>
          <div id="messa"><a href="#">Message</a></div>
					<div id="mytripa"><a href="#">My Trip</a></div>
					<div id="friendMen"><a href="#">Friendlist</a></div>
					<div id="postMen"><a href="#">Posting History</a></div>
				</div>


			</div>



	</div>	
	

  <div id="changeprofil">
        

    <div class="judulcp"> Account Information</div>
    <form name="myForm" action="editprofile.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
      <div id="accountinfocp">
      <div class="quetioncp">      

          User Name<span>*</span>  <br><br>
          Photo Profil <br><br>
          <div id="cp">Change your password here</div>
          <div id="pas">Password<span>*</span></div>   <br> <br>
          
      </div>
   
            <input class="fregis" type="text" id="usernamecp" name="username" value=<?php echo $_SESSION['user']; ?> readonly> 
            <span id="um">Please re-entry your Username</span>
            <br><br>
            <input type="file" name="profpict" > <br><br>
            <input class="fregis" type="text" id="password" name="password" value="password"> <input class="fregis" type="text" id="repassword" name="repassword" value="retypepassword"> 
            <span id="ps">Please re-entry your password</span>

      <br><br> 

      </div>
      <div class="judulcp"> Personal Information</div>
      <div id="personalinfocp">

         <div class="quetioncp">
          <br>
            Real Name<span>*</span><br><br>  
            Phone Number        <br><br>
            Birthday        <br><br>
            Location<span>*</span> <br><br>
            Gender   <br><br>
            Address<span>*</span><br><br>
            <br>
      </div>
     
    <br>
   
  <input type="text" id="realname" class="itex"name="realname" size = "30" value="<?php 
      $query="select * from `users` where `username`='".$_SESSION['user']."'";
      $hasil=mysql_query($query);
      $a=mysql_fetch_assoc($hasil);
      echo $a['real_name'];
    ?>">   <span id="rm">Please re-entry your Real Name</span><br><br>
  <input type="text" id="phonenumber" class="itex" name="phonenumber"  size = "30" value="<?php
      echo $a['phone_number'];
    ?>"> <br><br>
   <select name="tgl">
   <?php 
      $query="select (birthday)'tgl' from `users` where `username`='".$_SESSION['user']."'";
      $hasil=mysql_query($query);
      $day=mysql_fetch_assoc($hasil);
      $time = strtotime($day['tgl']);
      
      for ($i=1; $i < 32; $i++) { 
        if (Date('j',$time)==$i) { ?>
          <option value=<?php echo $i; ?> selected><?php echo $i ?></option>
        <?php  } else{ ?>
        <option value=<?php echo $i; ?>><?php echo $i ?></option>
     <?php   }
      } ?>
 
      
    
  
  </select>   
  <select name="bln">
    <?php 
      for ($i=1; $i < 13; $i++) { 
        if (Date('n',$time)==$i) { ?>
          <option value=<?php echo $i; ?> selected><?php echo Date('F',strtotime("2000-$i-20")); ?></option>
        <?php  } else{ ?>
        <option value=<?php echo $i; ?>><?php echo Date('F',strtotime("2000-$i-20")); ?></option>
        <?php   }
      } ?>
    
  </select>
    
  <select name="thn"><?php 
      for ($i=1960; $i < 2015; $i++) { 
        if (Date('Y',$time)==$i) { ?>
          <option value=<?php echo $i; ?> selected><?php echo $i ?></option>
        <?php  } else{ ?>
        <option value=<?php echo $i; ?>><?php echo $i ?></option>
     <?php   }
      } ?>
      

  </select><br><br>
  <input type="text" id="loca" name="loca"  class="itex"size = "30" value="<?php 
  
      echo $a['location'];
    ?>">    <span id="loc">Please re-entry your Location</span> <br> <br> 
  <?php 
      if($a['gender']=="Male"){ ?>
        <input type='radio' id='sex' name='sex' value='male' checked>Male
        <input type="radio" name="sex" value="female">Female  
        <input type="radio" name="sex" value="other">Other <br><br>
     <?php 
      }
      elseif ($a['gender']=="Female") { ?>
        <input type='radio' id='sex' name='sex' value='male' >Male
        <input type="radio" name="sex" value="female" checked>Female  
        <input type="radio" name="sex" value="other">Other <br><br>
     <?php
      } 
      else { ?>

        <input type='radio' id='sex' name='sex' value='male' >Male
        <input type="radio" name="sex" value="female" >Female  
        <input type="radio" name="sex" value="other" checked>Other <br><br>
      <?php
      }

    ?>
   
  <input type="text" id="address" name="address" class="itex" size = "50" value="<?php 
    echo $a['address'];
   ?>">   <span id="adr">Please re-entry your address</span><br> <br>

     <br><br>
      <input type="submit" value="Submit">
  </div>
        

</form>
     

</div>
<div id="profil">
          <div id= "judulform"> Personal Information     <button id="bedit">Edit Profil</button></div>
     
  

  <div id="kotakform">
  
  <div id="isiform">
        <div id="quetion">
          <br>
            User Name <br><br>
            Real Name<br><br>  
            Phone Number        <br><br>
            Birthday        <br><br>
            Location <br><br>
            Gender  <br><br>
            Address<br><br><br>
        </div>
        <div id="answer1">
              <br>
                 <?php echo $_SESSION['user'] ."<br><br>";
                  echo $a['real_name']  ."<br><br>";
                  echo $a['phone_number'] ."<br><br>";
           

                 echo date('d F Y',$time) ."<br><br>";
                 echo $a['location'] ."<br> <br>";       
                 echo $a['gender'] ."<br><br>";
                 echo $a['address'] ."<br><br>";

                 $username=$_SESSION['user'];
                ?>

        </div>
 
    </div>
      <br>
      <br>

  </div>

</div>

		
    <div id="menuleft">
      <div class="menleft">
      <div class="baris" ><button id="btn1">Write</button></div>
       
      </div>
          <div class="menleft">
      <div class="baris" ><button id="btn2">Inbox</button></div>

      </div>
      <div class="menleft">
        <div class="baris" ><button id="btn3">Outbox</button></div>
      </div>
   
		</div>	
				
				
					

    <div id="pesan">
		<div id="kotaksearch">
 

		<div id="write">
					<div id="quetion1">
          <br>
        Title<span>*</span> <br><br>
        To<span>*</span> <br><br>
    
        </div>
        <div id="answer">
            <br>
            <form>
          <input type="text" name="title"  size = "30"><br><br>
          <input type="text" name="location"  size = "30"> <br><br>
					 Your Message:<br><br>
      <textarea name="description" rows="20" cols="100"></textarea> 
				</div>
			
			 <input type="submit" value="Kirim">
       </form>
		</div>
      <?php 

        $username=$_SESSION['user'];
        $qwe="SELECT * FROM `message` WHERE `receiver` ='".$username."'";
        $inbox=mysql_query($qwe);

        $qwe1="SELECT * FROM `message` WHERE `sender` ='".$username."'";
        $outbox=mysql_query($qwe1);

       ?>
		  <div id="inbox">
       <div id="inboxopen">

        Title : Ke Sarkem Yuk <br> 
        From  : A <br>
        Date  : 29 Febuary 2014 <br><br>

        Your Message : <br><br>

        <textarea rows="20" cols="100">  contoh message</textarea>

        </div>
          <?php 
         while ($i=mysql_fetch_assoc($inbox)) { ?>
				<div class="panelmessage2"> <div class="tofrom">From   : <?php echo $i['sender'] ?> </div> <div class="titlem"> <?php echo $i['title'] ?></div><div class="tglm"><?php echo $i['mess_time'] ?></div></div>
			   <?php } ?>
		  </div>
		  <div id="outbox">
				<div id="outboxopen">

        Title : Ke Sarkem Yuk <br>
        To  : A <br>
        Date  : 29 Febuary 2014   <br>  <br>

        Your Message : <br><br>

        <textarea rows="20" cols="100">  contoh message</textarea>


        </div> 
            <?php 
         while ($o=mysql_fetch_assoc($outbox)) { ?>
        
        	<div class="panelmessage"> <div class="tofrom">To  : <?php echo $o['receiver'] ?> </div> <div class="titlem"> <?php echo $o['title'] ?></div> <div class="tglm"><?php echo $o['mess_time'] ?></div></div>
					<?php } ?>
          </div>
		</div>
    </div>
  </div>

  </div>


  <div id="friendlist">
        <h2>Friendlist</h2>

        <?php 
          for ($i=0; $i < 18; $i++) { ?>
                <div class="friend">
                  <div class="friendPP"><img src="img/1.png" alt="image"></div>
                  <div class="friendName"><span>Username</span></div>
                </div>
        <?php }  ?>
     


      
        </div>
<div id="myytrip">
    <div class="mytrip">
          <div class="mantrip">
          
          <div class="mantripTitle">
            <h2>Managed Trip</h2>
          </div>
          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/traveler1.png" class="mantripIcon" alt="image"> Traveler: 10/20</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/traveler1.png" class="mantripIcon" alt="image"> Traveler: 10/20</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/traveler1.png" class="mantripIcon" alt="image"> Traveler: 10/20</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/traveler1.png" class="mantripIcon" alt="image"> Traveler: 10/20</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

        </div>

        <div class="mantrip">
          
          <div class="mantripTitle">
            <h2>Joined Trip</h2>
          </div>
          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

          <div class="mantripIsi">
            <div class="mantripImg"><img src="img/1.png" alt="image"></div>
            <div class="mantripJudul"><h3>Judul Trip</h3></div>
            <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date 15 October 2014</div>
            <div class="mantripDetail"><img src="img/grup2.png" class="mantripIcon" alt="image"> <a href="grup.php">Grup Discussion</a></div>
          </div>

        </div>

      </div>
</div>


<div id="posthistor">
      <div class="mytrip">
        <div class="mantrip">
          
          <div class="mantripTitle">
            <h2>Destination Info</h2>
          </div>
          <?php 
            $q="SELECT d.title,d.content,d.price,d.location,d.posting_date,d.dest_id FROM `destination` d, `users` u WHERE d.username='".$username."' AND u.username='".$username."'";
            $d=mysql_query($q);
            

            while ($dest=mysql_fetch_assoc($d)) { ?>
                <div class="mantripIsi">
                <div class="mantripImg"><img src="img/1.png" alt="image"></div>
                <div class="mantripJudul"><h3><a href="destopencom.php?id=<?php echo $dest['dest_id']; ?>"><?php echo $dest['title']; ?></a></h3></div>
                <div class="mantripDetail"><img src="img/l3.png" class="mantripIcon" alt="image"> Location: <?php echo $dest['location']; ?></div>
                <div class="mantripDetail"><img src="img/price2.png" class="mantripIcon" alt="image"> Price: Rp <?php echo $dest['price']; ?></div>
                </div>
            <?php }


           ?>
         

        </div>

        <div class="mantrip">
          
          <div class="mantripTitle">
            <h2>Events</h2>
          </div>
            <?php 
              $q="SELECT d.title,d.content,d.date_start,d.date_end,d.location,d.posting_date,d.event_id FROM `event` d, `users` u WHERE d.username='".$username."' AND u.username='".$username."'";
              $d=mysql_query($q);
             
              while ($event=mysql_fetch_assoc($d)) { ?>
                <div class="mantripIsi">
                <div class="mantripImg"><img src="img/1.png" alt="image"></div>
                <div class="mantripJudul"><h3><a href="eventsopencom.php?=<?php echo $event['event_id']; ?>"><?php echo $event['title']; ?></a></h3></div>     
                <div class="mantripDetail"><img src="img/l3.png" class="mantripIcon" alt="image"> Location: <?php echo $event['location']; ?></div>
                <div class="mantripDetail"><img src="img/date1.png" class="mantripIcon" alt="image"> Date: <?php $dstart=strtotime($event['date_start']); $dend=strtotime($event['date_end']); echo date('d F Y',$dstart)." - ".date('d F Y',$dend);?></div>
                </div>
            <?php }

            ?>
          

        </div>



      </div>
</div>
  <?php 
    include("footer.php");
   ?>
</body>
</html>