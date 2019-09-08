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
        <link rel="stylesheet" type="text/css" href="../css/w3.css">
<body class="fluid">
<div id="top-part">
    <div class="w3-left">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['comapanylogo']).'" id="companyLogo">'?>
    </div>
    
    <div id="addressa" class="w3-center">
    <?php
    echo $row['companyname']; echo "<br>";
    echo $row['companyzipcode']; echo "<br>";
    echo $row['companyemail']; echo " ";
    echo $row['companyphoneno'];
    //echo $row['companyemail'];
    ?>
    
    </div>
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
    <div id="main" class="container">
        <div id="loksalike">
        <h5>Items</h5>
        <ul>
        <li><a>Add Stock</a></li>
        <li><a>View Stock</a></li>
        <li><a>Edit Stock</a></li>
        <li><a>Stock Reports</a></li>
        </ul>
        <h5>Quotations</h5>
        <ul>
        <li><a>Add Quotations</a></li>
        <li><a>View Quotation</a></li>
        <li><a>Edit Quotation</a></li>
        </ul>
        <h5>Reports</h5>
        <ul>
        <li><a>Quotation reports</a></li>
        <li><a>Stock Reorts</a></li>
        <li><a>Others</a></li>
        </ul>
        </div>
    </div>
</div>
<div class="footer">
    Developed by Tony
</div>
</body>
</html>