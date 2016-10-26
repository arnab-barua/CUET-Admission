<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$password=$_POST['password'];
	if($password=="cuetCSE10"){
		echo "<a href=\"inter_notice_form.php?pass=$password\">1.Publish Admission Notice & Form</a><br />";
		echo "<a href=\"inter_publish_eligible.php?pass=$password\">2.Revoke access on application form & publish Eligible list</a><br />";
		echo "<a href=\"inter_publish_result.php?pass=$password\">3.Publish Admission Test Result</a><br />";
		
		}
	else{	
		echo "Password Not matched";
	}
	?>
</td>
	
<?php
	include("includes/footer.php");
	?>