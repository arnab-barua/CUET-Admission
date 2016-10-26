<?php
include("includes/header.php");
?>
<td id="page">
	<?php
		$total_roll=$_GET['total'];
		$query="CREATE TABLE IF NOT EXISTS test(roll int(3),marks int(3))";
		if(!mysql_query("$query",$con))
		{
			die("Record not added ".mysql_error());
		}
		for($i=1;$i<=$total_roll;$i++)
		{	
			$a=$_POST[$i];
			$sql="INSERT INTO test (roll, marks)VALUES ('$i', '$a')";
			mysql_query($sql);
			echo "$a"."<br />";
		}
		$query="ALTER TABLE test ORDER BY marks DESC";
		if(!mysql_query("$query",$con))
		{
			die("Table cann't be reordered ".mysql_error());
		}
		$query="ALTER TABLE test ADD position INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY";
		if(!mysql_query("$query",$con))
		{
			die("Cann't create the column Roll ".mysql_error());
			echo "<br />";
		}
	?>
</td>
<?php
include("includes/footer.php");
?>