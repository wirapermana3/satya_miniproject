<?php
$host="localhost";
$user="root";
$pass="";
$db="satya_miniproject";

$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
	die("Failed Database Connection:".mysqli_connect_error());
}
?>