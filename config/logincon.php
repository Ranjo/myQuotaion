<?php
include 'dbconfig.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['usrname']);
$pass = $_POST['pwds'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$pass'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);

if($count == 1){
	$_SESSION['login_user'] = $username;

    header("location: ../users/profile.php");	
}
else{
    	echo " <script>
        alert('Incorrect credentials');
        window.location.href='../index.php'
        </script>";
   /*echo "Wrong Credentials"; */
	//echo $_SESSION['login_user'];
//header("location: ../index.php?msg=2");
}
/*
$result2 = mysqli_query($con,"INSERT INTO users(username, password) VALUES('$username', '$pass')");
if(!$result2){
	//header("location: ../index.php?msg=2");
	echo "Wrong Credentials";
}
else{
    //$_SESSION['login_user'] = $doctorid;
	echo "successfull";
	//header("location: ../adminpanel/doctor/startpage.php");
//header("location: ../index.php?msg=2");

}*/
?>