<?php
    session_start();

    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("triptis",$con);
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $name = $_POST['realname'];
    $phone = $_POST['phonenumber'];
    $loc = $_POST['loca'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $birth = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
    
    $query = "INSERT INTO `users`(`username`, `password`, `location`, `real_name`, `phone_number`, `birthday`, `gender`, `address` , `profile_pict`) VALUES ('".$username."',MD5('".$pass."'),'".$loc."','".$name."','".$phone."','".$birth."','".$sex."','".$address."',null)";

    $hasil = mysql_query($query,$con);
    if($hasil == 1){
        $_SESSION['user']=$username;
        header("Location: homeLogin2.php");
    }
    else {
        header("Location: index?err=1");
    }
?>