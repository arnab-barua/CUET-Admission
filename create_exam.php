<?php
	include("includes/header.php");
?>

<td id="page">
	<?php
		$pass=$_GET['token'];
		$examinee=$_POST['total_examinee'];
		if($pass=="northernRoof")
		{
			$query="CREATE TABLE IF NOT EXISTS exam(formno int(5),name varchar(30))";
			if($db->query($query) === false)
			{
				echo "Cannt create exam table!!!!";
			}
			
			$query="SELECT FormNo,name,total FROM applicant ORDER BY total DESC LIMIT 0,$examinee";
			foreach($db->query($query) as $row)
			{
				$formno = $row["FormNo"];
				$name = $row["name"];
				$total = $row["total"];
				$sql="INSERT INTO exam (Formno, Name)values ('{$formno}', '{$name}')";
				
				if($db->query($sql) === true)
				{
					echo "Record added : " . $formno . "Name : " . $name . "<br>";
				}
				else
				{
					echo "Record not added!!!";
				}
				
			}
			
			$query="ALTER TABLE exam ADD roll INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY";
			if($db->query($query) === true)
			{
				echo "roll column added... <br />";
			}
			else
			{
				echo "Cannt add roll column!!!";
			}
			
			$query="ALTER TABLE exam ADD hallname VARCHAR( 50 ) NOT NULL";
			if($db->query($query) === true)
			{
				echo "hallname column added... <br />";
			}
			else
			{
				echo "Cannt add hallname column!!!";
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
				
				$query = "UPDATE exam SET hallname='{$hall}' WHERE roll={$i}";
				if($db->query($query) === false)
				{
					echo "Cannt add Hall Name!!!<br />";
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