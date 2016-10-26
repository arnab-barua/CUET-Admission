<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$pass=$_GET['pass'];
	if($pass=="cuetCSE10"){
		echo "<h4 align=\"center\"><font color=\"#000000\"><u>Enter marks of the admission test</u></h4>";	
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =7";
		mysql_query($query_set);
		$query_count="SELECT COUNT(roll) FROM exam";
		$result=mysql_query("$query_count");
		$total_roll_array=mysql_fetch_array($result);
		$total_roll=$total_roll_array[0];
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
								<td bgcolor=\"#001025\">$i</td>
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