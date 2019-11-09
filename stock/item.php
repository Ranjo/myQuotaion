<?php
include '../config/dbconfig.php';
$itemid= mysqli_real_escape_string($conn, $_POST['itemid']);
$itemname= mysqli_real_escape_string($conn, $_POST['itemname']);
$itemdesc= mysqli_real_escape_string($conn, $_POST['itemdesc']);
$cost= mysqli_real_escape_string($conn, $_POST['cost']);
$quantity= mysqli_real_escape_string($conn, $_POST['quantity']);
$unit= mysqli_real_escape_string($conn, $_POST['unit']);
$tax= mysqli_real_escape_string($conn, $_POST['tax']);
//$tax= mysqli_real_escape_string($conn, $_POST['enteredby']);
//$enteredby= "Tony";
$results= mysqli_query($conn, "INSERT INTO stock(itemid, itemname, idescription, cost, iquantity, unit, tax, enteredby) VALUES('$itemid', '$itemname', '$itemdesc', '$cost', '$quantity', '$unit', '$tax')");
if(!$results){
    echo "try again";
}
else{
    echo "success";
}
?>
