<?php
	include("includes/header.php");
?>
<td id="page">
	<?php
		$query="SELECT visibility FROM pages WHERE PageNo=7";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		if($row[0]==1)
		{
			echo "<h2 align=\"center\"><font color=\"#000000\"><b><u>UNDERGRADUATE ADMISSION-2013</u></b></h2>";
			echo "<h4 align=\"center\"><font color=\"#000000\"><u>Admission test result</u></h4>";		
			$query="SELECT exam.name,test.roll,position FROM exam,test WHERE exam.roll=test.roll ORDER BY position ASC";
			if(!mysql_query($query,$con))
			{
				die("Not connected to the database ".mysql_error());
			}
			else
			{?>
				<table border="6" bordercolor="#F4A460" align="center" cellspacing="1" cellpadding="6">
				<tr bgcolor="#008080">
					<td>Roll</td>
					<td>Name</td>
					<td>Merit Position</td>
				</tr>
				<?php
				$result=mysql_query($query,$con);
				while($row=mysql_fetch_array($result))
				{?>
					<tr><td>
					<?php
					echo $row[1];
					?>
					</td><td>
					<?php
					echo $row[0];
					?>
					</td><td bgcolor="#66CDAA">
					<?php
					echo $row[2];
					?>
					</td></tr>
					<?php
				}
			}
		}
		else
			echo "Eligible list for admission test is not published yet";
	?>
</td>
<?php
	include("includes/footer.php");
	?>	