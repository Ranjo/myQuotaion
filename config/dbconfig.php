<?php
$lh ="localhost";
$rt ="root";
$ps ="";
$db ="testbsmgmt";
$conn= mysqli_connect($lh,$rt,$ps,$db);
if (!$conn) {
	die("Could Not connect db");
}
?>