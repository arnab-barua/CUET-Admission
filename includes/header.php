<?php
	require_once("connection.php");
	?>
	
<html>
<head>
<title>CUET</title>
		<link rel="shortcut icon" href="image/logo.ico" >
		<link href="stylesheet/public.css" media="all" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			var image1 = new Image()
			image1.src = "image/cuet2.jpg"
			var image2 = new Image()
			image2.src = "image/notice.jpg"
		</script>
</head>

<body>
	<div id="global">
	<div class="header"> 
	</div>
	<div class="center_div">
		<table id="structure">
			<tr>
				<td id="button">
					<ul>
						<?php
						foreach($db->query('SELECT * FROM pages')as $row)
						{
							if($row[3]==1){
								if($row[0]>=4){
									echo "<li><a href=\"$row[1]\">--$row[2]</a></li>";
								}
								else{
									echo "<li><a href=\"$row[1]\">$row[2]</a></li>";
								}
							}
						}
						?>
                    </ul>
				</td>