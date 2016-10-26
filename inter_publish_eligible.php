<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$pass=$_GET['pass'];
	if($pass=="cuetCSE10"){
		$query_set="UPDATE pages SET visibility = '0' WHERE PageNo =5";
		mysql_query($query_set);
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =6";
		mysql_query($query_set);
		$query_set="SELECT COUNT(FormNo) FROM applicant";
		$result_total_row=mysql_query($query_set);
		$num=mysql_fetch_array($result_total_row);
		$total_applicant=$num[0];
		echo "Total number of applicant for admission test = $total_applicant";
		?>
		<form action="create_exam.php?token=northernRoof" method="post">
			<b>Total Examinee for Admission test :</b>&nbsp;
			<input type="text" name="examinee" size="3" maxlength="10"/></br>
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