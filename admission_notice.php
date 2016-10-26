<?php
	include("includes/header.php");
?>

<td id="page">
	<?php
		$stmt = $db->prepare('SELECT visibility FROM pages WHERE PageNo=:pageno');
		$stmt->bindValue(':pageno', '4', PDO::PARAM_INT);
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo $row;
		if($row[0]==0)
			echo "Admission circulation is not published yet";
		else{ ?>
			<h2 align="center"><font color="#000000"><b><u>UNDERGRADUATE ADMISSION-2013</u></b></h2>
			<h4 align="center"><font color=BLACK><b><u>APPLICATION PROCESS</font></u></b></h4>
			<div id="notice">
				<img src="image/notice.jpg" width="740" align="center">
				</div>
	<?php }
	?>
</td>	
<?php
	include_once("includes/footer.php");
?>