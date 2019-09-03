<?php include('../config/session.php');
include('../config/dbconfig.php');
$result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$user_check'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Welcome <?php echo $user_check; ?></title>
</head>
    <link rel="stylesheet" type="text/css" href="../css/prof.css">
<body>
<div id="top-part">
</div>
<div id="pdetails">
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['comapanylogo']).' ">'?>
Welcome <?php echo $user_check; ?>
</div>
<div id="side">
</div>
</body>
</html>