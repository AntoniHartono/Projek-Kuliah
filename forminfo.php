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
      $("#pri").hide();
      
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
     var y = document.forms["myForm"]["price"].value;
    if (y==null || y=="") {
         $("#pri").show();
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
      <div class="judul"> <h3>Post Information</h3></div>
      <form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
      <div id="accountinfo">
      <div class="quetion">      

          Title<span>*</span>  <br><br>
          Location<span>*</span>   <br><br>

          Price  <span>*</span> <br><br>

  
      </div>
   
            <input class="finfo" type="text" id="title" name="title" > 
            <span id="tit">Please re-entry your info title </span>
            <br><br>
            <input class="finfo" type="text" id="loca" name="loca" >
            <span id="loc">Please re-entry your info location</span>
      <br><br>

            <input class="finfo" type="text" id="price" name="price" >
            <span id="pri">Please re-entry your info price</span>
            <br><br>
      
  </div>
  <div class="judul"> <h3>Description</h3></div>
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