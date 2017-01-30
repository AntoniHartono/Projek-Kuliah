<?php 
  session_start();
 ?>
 <?php 
  include("konak.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <title>TripTis.com</title>
    <meta charset="utf-8">
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <?php 

      include("headerLoginhead.php");
   ?>
<script>

    $(document).ready( function() {

      $("#tit").hide();
      $("#loc").hide();
      $("#max").hide();
      
      $("#ta").click(function() {
        $("#ta").val("");
    });

    });
function validateForm() {
  var error = 0;
    var y = document.forms["myForm"]["title"].value;
    if (y==null || y=="" ) {
        $("#tit").show();


       error++;
    }
    var y = document.forms["myForm"]["loca"].value;
    if (y==null || y=="") {
         $("#loc").show();
         error++;
     }
     var y = document.forms["myForm"]["maxtravel"].value;
    if (y==null || y=="") {
         $("#max").show();
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

  <div id="formregister">
    <div class="judul"><h3> Trip Information</h3></div>
<form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
      <div id="accountinfo">
      <div class="quetion">      

          Title<span>*</span>  <br><br>
          Location<span>*</span>   <br><br>

          Max Teaveler  <span>*</span> <br><br>

          Deadline <br><br>
      </div>
   
            <input class="finfo" type="text" id="title" name="title" > 
            <span id="tit">Please re-entry your info title </span>
            <br><br>
            <input class="finfo" type="text" id="loca" name="loca" >
            <span id="loc">Please re-entry your info location</span>
      <br><br>

            <input class="finfo" type="text" id="maxtravel" name="maxtravel" >
            <span id="max">Please re-entry your info price</span>
            <br><br>
  <select>  
       <?php 
      for ($i=1; $i < 32; $i++) { ?>
        <option value="day"><?php echo $i ?></option>
     <?php } ?> 
   
  
</select>   <select>
  <option value="01">January</option>
  <option value="02">Febuary</option>
  <option value="03">March</option>
  <option value="04">April</option>
  <option value="05">May</option>
  <option value="06">June</option>
  <option value="07">July</option>
  <option value="08">August</option>
  <option value="09">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
  </select>
  <select><?php 
      for ($i=2014; $i < 2028; $i++) { ?>
        <option value="year"><?php echo $i ?></option>
     <?php } ?> 
  </select><br><br>  
  </div>
  <div class="judul"> <h3> Post Information</h3></div>
  <div id="personalinfo">
    <br>
      Description:<br><br>
      <textarea id="ta" name="description" rows="20" cols="100">write your information here
      </textarea> 

      <br>
      Picture 1<input type="file" name="picture1" > <br><br>
      Picture 2<input type="file" name="picture2" > <br><br>
      Picture 3<input type="file" name="picture3" > <br><br>
     
  <br><br>
  <input type="submit" value="Submit">
</div>
</form>
</div>

  <?php 
    include("footer.php");
   ?>
</body>

</html>