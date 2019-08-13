<?php
$lh ="localhost";
$rt ="root";
$ps ="";
$db ="businesmgt";
$con= mysqli_connect($lh,$rt,$ps,$db);
if (!$con) {
	die("Could Not connect db");
}
?>