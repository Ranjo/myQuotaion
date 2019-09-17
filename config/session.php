<?php 

include('dbconfig.php');
session_start();

$user_check = $_SESSION['login_user'];

   //$ses_sql = mysqli_query($conn,"select firstname from docotor where doctorid = '$user_check' ");

   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   //$login_session = $row['firstname'];

/*if(!isset($user_check)){
	header("index.php");*/
}
// Check user login or not
/*if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}*/

// logout
/*if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}*/
?>
?>