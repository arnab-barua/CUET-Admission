<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$pass=$_GET['pass'];
	if($pass=="cuetCSE10"){
		echo "<h4 align=\"center\"><font color=\"#000000\"><u>Enter marks of the admission test</u></h4>";	
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =7";
		if($db->query($query_set) === true)
		{
			echo "Admission Test Result page is now visible... <br>";
		}
		$query_count="SELECT COUNT(roll) as 'count' FROM exam";
		$result = $db->query($query_count);
		$row = $result->fetch_assoc();
		$total_roll = $row['count'];
		?>
		<form action="publish_result.php?total=<?php echo "$total_roll";?>" method="post">
			<table border="6" bordercolor="#F4A460" align="center" cellspacing="1" cellpadding="6">
				<tr bgcolor="#008080">
					<td>roll</td>
					<td>marks</td>
				</tr>
				<?php
					for($i=1;$i<=$total_roll;$i++)
					{
						echo "<tr>
								<td bgcolor=\"#E5FFCC\">$i</td>
								<td><input type=\"number\" name=\"$i\"  size=\"3\" maxlength=\"2\"/></td>
							</tr>";
					}
				?>
				<tr>
					<td align="left"><input type="reset" value="RESET"></td>
					<td align="right"><input type="SUBMIT" value="SUBMIT"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	else
		echo "You have no privilage to access this page";
	?>
</td>
	
<?php
	include("includes/footer.php");
	?>