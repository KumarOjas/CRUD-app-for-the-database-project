<?php 

$host = "localhost";
$username = "";
$password = "";
$dbname = "";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
	die("Connection failed" . mysqli_errno($con));
}

 ?>