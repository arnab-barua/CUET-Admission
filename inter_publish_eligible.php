<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$pass=$_GET['pass'];
	if($pass=="cuetCSE10")
	{
		$query_set = "UPDATE pages SET visibility = '0' WHERE PageNo = 5 ";
		if($db->query($query_set) === true)
		{
			echo "Admission form is not visible now.<br>";
		}
		
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =6";
		if($db->query($query_set) === true)
		{
			echo "Examinee list is visible now.<br>";
		}
		
		$query_set = "SELECT * FROM applicant";
		$result = $db->query($query_set);
		$num = mysqli_num_rows($result);
		echo "Total number of applicant for admission test = $num";
		?>
		
		<form action="create_exam.php?token=northernRoof" method="post">
			<b>Total Examinee for Admission test :</b>&nbsp;
			<input type="text" name="total_examinee" size="3" maxlength="10"/></br>
			<input type="SUBMIT" value="Create List">
		</form>
		
		<?php
		}
	else{	
		echo "ERROR: YOU HAVE NO PRIVILAGE TO ENTER THIS PAGE";
	}
	?>
</td>
	
<?php
	include("includes/footer.php");
	?>