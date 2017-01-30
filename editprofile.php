<?php
	session_start();
	include("konak.php");
	
	if(isset($_FILES['profpict']['name'])){
		$foto = $_FILES['profpict']['name'];
		$uploadedFile = "users/".$foto;
		if ($_FILES['profpict']['type']=="image/jpeg" || $_FILES['profpict']['type']=="image/png") {
			if(move_uploaded_file($_FILES['profpict']['tmp_name'], $uploadedFile)){
	
			}
		}
	}

	$username = $_POST['username'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $name = $_POST['realname'];
    $phone = $_POST['phonenumber'];
    $loc = $_POST['loca'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $birth = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];

    $query = "UPDATE `users` SET `password`=md5('".$pass."'),`location`='".$loc."',`real_name`='".$name."',`phone_number`='".$phone."',`birthday`='".$birth."',`gender`='".$sex."',`address`='".$address."',`profile_pict`='".$uploadedFile."' WHERE `username`='".$username."'";

   	if(mysql_query($query)){
		header("location: homeLogin2.php");
	}
?>