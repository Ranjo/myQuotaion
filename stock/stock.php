<?php 
include '../config/dbconfig.php';
//include '../config/session.php';
$itemeid = $_POST['itemid'];
$itemcategory = $_POST['cartegory'];
$itemname = $_POST['itemname'];
$itemdesc = $_POST['itemdesc'];
$cost = $_POST['cost'];
$tax = $_POST['tax'];
$creator = "Tony";
//$totalcost = ($tax/100)+$cost;
$addstockQ = mysqli_query($conn, "INSERT INTO stock(itemid, category, itemname, description, cost, tax, CreatedBy) VALUES('$itemeid', '$itemcategory', '$itemname', '$itemdesc', '$cost', '$tax', '$creator')");
if(!$addstockQ){
	echo "try again";
}
else{
	echo "success";
}
?>