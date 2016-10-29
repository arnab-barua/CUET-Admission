<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<?php
		$pass=$_GET['pass'];
		if($pass=="cuetCSE10")
		{
			$query_set="UPDATE pages SET visibility = '1' WHERE PageNo between '4' and '5' ";
			if($db->query($query_set) === true)
			{
				echo "admission notice, admission form are now visible";
			}
			
		}
		else
		{	
			echo "ERROR: YOU HAVE NO PRIVILAGE TO ENTER THIS PAGE";
		}
	?>
</td>
	
<?php
	include("includes/footer.php");
	?>	