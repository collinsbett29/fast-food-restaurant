<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "Fast-Food";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname,"3308") or die($conn->connect_error);

	return $conn;
}
?>