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
<html>
	<head>
		<title>max testing </title>
	</head>
	
<body>
	<?php
	echo "testing 1 2 3....<br>";
		$sql = "SELECT MAX(FormNo) as 'max' FROM applicant";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
		$res = $row['max'];		
		echo $res;
		?>
		</body>
		</html>