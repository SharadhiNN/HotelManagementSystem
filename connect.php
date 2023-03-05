<?php
error_reporting(E_ERROR | E_PARSE);
$conn = new mysqli('localhost','root','','hotel_1',3307);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	else{
	echo "connection ok";
	}
?>