<?php
include("includes/header.php");
?>
<td id="page">
	<?php
		$total_roll=$_GET['total'];
		$query="CREATE TABLE IF NOT EXISTS test(roll int(3),marks int(3))";
		if($db->query($query) === true)
		{
			echo "Test Table created. <br>";
		}
		
		for($i=1;$i<=$total_roll;$i++)
		{	
			$a=$_POST[$i];
			$sql="INSERT INTO test (roll, marks)VALUES ('$i', '$a')";
			if($db->query($sql) === true )
			{
				echo $i." -> ".$a." <br />";
			}
			else
				echo "marks of ".$i."Cannt be added";
		}
		
		$query="ALTER TABLE test ORDER BY marks DESC";
		if($db->query($query) === true)
		{
			echo "Table has reordered ";
		}
		
		$query="ALTER TABLE test ADD position INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY";
		if($db->query($query) === true)
		{
			echo "Position column has been added ";
			echo "<br />";
		}
	?>
</td>
<?php
include("includes/footer.php");
?>