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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
    
<body>
<div id="top-part">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['comapanylogo']).'" id="companyLogo">'?>
</div>
<div id="pdetails">
    <span>Welcome <?php echo $user_check; ?></span>
</div>
<div class="containers">
    <div id="side">
        <div class="litems">Items</div>
        <div class="litems">Quotations</div>
        <div class="litems"> Reports</div>
    </div>
    <div id="main">
        hello
    </div>
</div>
<div class="footer">
    Developed by Tony
</div>
</body>
</html>