<?php
	include("includes/header.php");
?>

<td id="page">
	<?php
		$pass=$_GET['token'];
		$examinee=$_POST['examinee'];
		if($pass=="northernRoof")
		{
			$query="CREATE TABLE IF NOT EXISTS exam(formno int(5),name varchar(30))";
			if(!mysql_query("$query",$con))
			{
				die("Record not added ".mysql_error());
			}
			
			$query="SELECT FormNo,name,total FROM applicant ORDER BY total DESC LIMIT 0,$examinee";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
			{
				echo "$row[0] $row[1] $row[2]"."<br />";
				$sql="INSERT INTO exam (Formno, Name)values ('$row[0]', '$row[1]')";
				if(!mysql_query($sql))
				{
					die("Record cann't be added into exam table ".mysql_error());
				}
			}
			$query="ALTER TABLE exam ADD roll INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY";
			if(!mysql_query("$query",$con))
			{
				die("Cann't create the column Roll ".mysql_error());
				echo "<br />";
			}
			$query="ALTER TABLE exam ADD hallname VARCHAR( 50 ) NOT NULL";
			if(!mysql_query("$query",$con))
			{
				die("Cann't create the column Hall Nmae ".mysql_error());
				echo "<br />";
			}
			for($i=1;$i<=$examinee;$i++)
			{
				if($i>=1&&$i<=5)
					$hall="Civil Engineering Building-105";
				elseif($i>=6&&$i<=10)
					$hall="Civil Engineering Building-206";	
				elseif($i>=11&&$i<=15)
					$hall="New Academic Building-308";
				elseif($i>=16&&$i<=20)
					$hall="Mechanical Engineering Building-203";
				elseif($i>=21&&$i<=25)
					$hall="Mechanical Engineering Building-304";
				elseif($i>=26&&$i<=30)
					$hall="New Academic  Building-406";
				else
					$hall="New Academic Building-507";
				$query="UPDATE exam SET hallname='{$hall}' WHERE roll={$i}";
				if(!mysql_query("$query",$con))
				{
					die("<br />Cann't assign Hall Nmae ".mysql_error());
					echo "<br />";
				}
			}
		}
		else
			echo"You have no privilage to access this page";
	?>
</td>	
<?php
	include_once("includes/footer.php");
?>