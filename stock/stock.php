<?php 
include '../config/dbconfig.php';
$itemeid = $_POST['itemid'];
$itemcategory = $_POST['cartegory'];
$itemname = $_POST['itemname'];
$itemdesc = $_POST['itemdesc'];
$cost = $_POST['cost'];
$tax = $_POST['tax'];
$totalcost = ($tax/100)+$cost;

?>