<?php
	$serverName = "localhost";
	$userName = "jitu";
	$password = "jti";
	$DBname = "exercise";
	
	//Create connection
	$db = new mysqli($serverName, $userName, $password, $DBname);
	
	//check connection
	if($db->connect_error) {
		die("Connection failed : ".$db->connect_error);
	}
?>