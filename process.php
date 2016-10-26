<?php
	require_once("includes/connection.php");
?>
<?php
	include("includes/header.php");
?>	
<td id="page">
		<?php
			$sname=$_POST['sname'];
			$mobnumber=$_POST['smobnumber'];
			$sfname=$_POST['sfname'];
			$smname=$_POST['smname'];
			$byear=$_POST['byear'];
			$bmonth=$_POST['bmonth'];
			$btdate=$_POST['btdate'];
			$snation=$_POST['snation'];
			$speraddress=$_POST['speraddress'];
			$spreaddress=$_POST['spreaddress'];
			$sscroll=$_POST['sscroll'];
			$sscgpa=$_POST['sscgpa'];
			$hscroll=$_POST['hscroll'];
			$hscgpa=$_POST['hscgpa'];

			$ck=0;
			if($sname==NULL)
			{
				echo "Student's name cann't be empty.<br />";
				$ck=1;
			}
			if($sfname==NULL)
			{
				echo "Student's father's name cann't be empty.<br />";
				$ck=1;
			}
			if($smname==NULL)
			{
				echo "Student's mother's name cann't be empty.<br />";
				$ck=1;
			}
			if($byear=='yyyy'||$bmonth=='mm'||$btdate=='dd')
			{
				echo "Student's birthdate cann't be empty.<br />";
				$ck=1;
			}
			if($snation==NULL)
			{
				echo "Student's nationality field cann't be empty.<br />";
				$ck=1;
			}
			if($speraddress==NULL)
			{
				echo "Student's permanent address field cann't be empty.<br />";
				$ck=1;
			}
			if($spreaddress==NULL)
			{
				echo "Student's present address field cann't be empty.<br />";
				$ck=1;
			}
			if($mobnumber==NULL)
			{
				echo "Student's mobile number field cann't be empty.<br />";
				$ck=1;
			}
			if($sscroll==NULL)
			{
				echo "Student's SSC roll number field cann't be empty.<br />";
				$ck=1;
			}
			if($sscgpa==NULL)
			{
				echo "Student's SSC gpa field cann't be empty.<br />";
				$ck=1;
			}
			if($hscroll==NULL)
			{
				echo "Student's HSC roll number field cann't be empty.<br />";
				$ck=1;
			}
			if($hscgpa==NULL)
			{
				echo "Student's HSC gpa field cann't be empty.<br />";
				$ck=1;
			}
			$e=$_POST['hsceng'];
			$p=$_POST['hscphy'];
			$c=$_POST['hscche'];
			$m=$_POST['hscmath'];
			$t=$e+$p+$c+$m;
			if($t<17)
			{
				echo "Your total gpa of physics,chemistry,math and english of HSC examination is below 16. so you are not eligible";
				$ck=1;
			}
			
			if($ck==1)
			{echo "Please resolve these error.";
		?>
			echo "<a href="admission_form.php">Fill the application form again.</a>"
		<?php
			}
			else
			{
				$sql="insert into applicant (name, FathersName, MothersName, sex, bdate, nationality, PerAddress, PreAddress, number, email, sscboard, sscyear, sscroll, sscgpa, hscboard, hscyear, hscroll, hscgpa, english, physics, chemistry, math, total)values ('$_POST[sname]', '$_POST[sfname]', '$_POST[smname]', '$_POST[sex]', '$_POST[byear]-$_POST[bmonth]-$_POST[btdate]', '$_POST[snation]', '$_POST[speraddress]', '$_POST[spreaddress]', '$_POST[smobnumber]', '$_POST[semail]', '$_POST[sscboard]', '$_POST[sscyear]', '$_POST[sscroll]', '$_POST[sscgpa]', '$_POST[hscboard]', '$_POST[hscyear]', '$_POST[hscroll]', '$_POST[hscgpa]', '$_POST[hsceng]', '$_POST[hscphy]', '$_POST[hscche]', '$_POST[hscmath]', '$t')";
				if(!mysql_query("$sql",$con))
				{
					die("Record not added ".mysql_error());
				}
				else
				{
					$formno=mysql_query("SELECT max( FormNo ) FROM applicant",$con);
					$num=mysql_fetch_array($formno);
					echo "Your form number is ".$num[0].".Please save this number.";
				}
			}
		?>
</td>
<?php
	include("includes/footer.php");
	?>