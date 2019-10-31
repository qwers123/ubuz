<?php

$servername = "localhost";
$username = "outcastp_oop";
$password = "Nagmamadalina";

$con=mysqli_connect($servername, $username, $password);

if(!$con){
	die("Connection Failed:" . mysqli_connect_error());
}
echo "Conected Successfully";
?>