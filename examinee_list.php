<?php
	include("includes/header.php");
?>
<td id="page">
	<?php
		$query="SELECT visibility FROM pages WHERE PageNo=6";
		$result=$db->query($query);
		$row=$result->fetch_assoc();
		if($row["visibility"]==1)
		{
			echo "<h2 align=\"center\"><font color=\"#000000\"><b><u>UNDERGRADUATE ADMISSION-2013</u></b></h2>";
			echo "<h4 align=\"center\"><font color=\"#000000\"><u>List of eligible candidates for admission test</u></h4>";
			
			?>
				<table border="6" bordercolor="#F4A460" align="center" cellspacing="1" cellpadding="6">
				<tr bgcolor="#008080">
					<td>Roll</td>
					<td>Name</td>
					<td>Form No</td>
					<td>Hall Name</td>
				</tr>
				
				<?php
				$query="SELECT * FROM exam";
				foreach($db->query($query) as $row)
				{?>
					<tr><td bgcolor="#66CDAA">
					<?php
					echo $row["roll"];
					?>
					</td><td>
					<?php
					echo $row["name"];
					?>
					</td><td>
					<?php
					echo $row["formno"];
					?>
					</td><td>
					<?php
					echo $row["hallname"];
					?>
					</td></tr>
					<?php
				}
		}
		else
			echo "Eligible list for admission test is not published yet";
	?>
</td>
<?php
	include("includes/footer.php");
	?>	