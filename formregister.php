<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="form.css">
    
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <title>TripTis.com</title>
    <meta charset="utf-8">
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script>

    $(document).ready( function() {

      $("#um").hide();
      $("#ps").hide();
      $("#rm").hide();
      $("#adr").hide();
           $("#loc").hide();
       
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
    var y = document.forms["myForm"]["repassword"].value;
    if (y==null || y=="" || y=="retypepassword") {
         $("#ps").show();
         error++;
     }
    var x = document.forms["myForm"]["password"].value;
    if(x!=y){
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
      include("header.php");
     ?>

  <div id="formregister">
    <div class="judul"> <h3>Account Information</h3></div>

<form name="myForm" action="register.php" onsubmit="return validateForm()" method="post">
      <div id="accountinfo">
      <div class="quetion">      

          User Name<span>*</span>  <br><br>
          Password<span>*</span>   <br><br>
      </div>
   
            <input class="fregis" type="text" id="username" name="username" placeholder="username"> 
            <span id="um">Please re-entry your Username</span>
            <br><br>
            <input class="fregis" type="password" id="password" name="password" placeholder="password"> <input class="fregis" type="password" id="repassword" name="repassword" placeholder="retypepassword"> 
            <span id="ps">Please re-entry your password</span>

      <br><br>
    
      </div>
       <div class="judul"> <h3>Personal Information</h3></div>
      <div id="personalinfo">

         <div class="quetion">
          <br>
            Real Name<span>*</span><br><br>  
            Phone Number        <br><br>
            Birthday        <br><br>
            Location<span>*</span> <br><br>
            Gender   <br><br>
            Address<span>*</span><br><br><br>
        </div>
     
    <br>
   
  <input type="text" id="realname" name="realname" size = "30">   <span id="rm">Please re-entry your Real Name</span><br><br>
  <input type="text" id="phonenumber" name="phonenumber"  size = "30"> <br><br>
   <select name="tgl">
    <?php 
      for ($i=1; $i < 32; $i++) { ?>
        <option value=<?php echo $i; ?>><?php echo $i ?></option>
     <?php } ?>
   
  
</select>   <select name="bln">
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
    <select name="thn"><?php 
      for ($i=1960; $i < 2015; $i++) { ?>
        <option value=<?php echo $i; ?>><?php echo $i ?></option>
     <?php } ?> 
      

  </select><br><br>
  <input type="text" id="loca" name="loca"  size = "30">    <span id="loc">Please re-entry your Location</span> <br> <br>  
  <input type="radio" id="sex" name="sex" value="male">Male  <input type="radio" name="sex" value="female">Female  <input type="radio" name="sex" value="other">Other <br><br>
  <input type="text" id="address" name="address"  size = "50">   <span id="adr">Please re-entry your address</span><br> <br>

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

