<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
	$pass=$_GET['pass'];
	if($pass=="cuetCSE10"){
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =4";
		mysql_query($query_set);
		$query_set="UPDATE pages SET visibility = '1' WHERE PageNo =5";
		mysql_query($query_set);
		echo "gotcha";
		}
	else{	
		echo "ERROR: YOU HAVE NO PRIVILAGE TO ENTER THIS PAGE";
	}
	?>
</td>
	
<?php
	include("includes/footer.php");
	?>	