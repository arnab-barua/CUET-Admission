<?php
	include("includes/header.php");
	?>
	
<td id="page">
	<div id="welcome">
		<h3>welcome to CUET</H3>
		<h4>Former Bangladesh Institute of Technology, Chittagong, abbreviated as BIT Chittagong is presently Chittagong University of Engineering & Technology (CUET). It is one of the prominent and prestigious autonomous self-degree-awarding institute in the engineering education of Bangladesh. This Institute was created out of Engineering College, Chittagong that was established in 1968. The Chittagong Engineering College functioned as the Faculty of Engineering of the University of Chittagong. Through a Government ordinance in 1986, the college was converted into an Institute of Technology. In 2003 this institute of technology was converted into a public university. The honorable President of Bangladesh is the Chancellor of the University.

Chittagong University Of Engineering & Technology abbreviated as CUET, is one of the prominent and prestigious degree awarding institute in the engineering education of Bangladesh. This University was created out of Engineering College, Chittagong, that was established in 1968. The Engineering College , Chittagong , functioned as the Faculty of Engineering of the University of Chittagong. Though a Government Ordinance in 1986 the college was converted into an institution (BIT, Chittagong).The honorable President of Bangladesh is the visitor of the institute . A Board of Governors headed by a Chairman appointed by the President is the policy making and administrative authority. There were three other similar Institutes of Technology in the country namely BIT Khulna, BIT Rajshahi and BIT Dhaka that are converted to Khulna University Of Engineering, Rajshashi University Of Engineering & Technology(RUET) & Technology(KUET),Dhaka University Of Engineering & Technology(DUET)

CUET is unique and incompatible due to its proximity to Chittagong, the major sea-port and the beautiful Hill city of the country. The University is situated by the side of the Chittagong-Kaptai road some 25 kilometers off from the center of Chittagong City. Moreover all the tourist attractions of the country like the large hydroelectric plant, the natural beauty of the lake of Kaptai, hill sports of Rangamati, Bandarban, the longest sea beach of the world and tourist resort of Cox's Bazar are only a few hours journey.</h4>
	</div>	
		
	
	<p id="slideimg"><img src="images/cuet2.jpg" width="600" height="400" name="slide" border="5px"/></p>
	<script type="text/javascript">
			var step=1;
			function slideit()
			{
				document.images.slide.src = eval("image"+step+".src");
				if(step<2)
					step++;
				else
					step=1;
				setTimeout("slideit()",2500);
			}
			slideit();
	</script>
	<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
	src="https://maps.google.com.bd/maps/ms?msa=0&amp;msid=212133239642090434128.0004e5e1065706c11368b&amp;
	hl=en&amp;ie=UTF8&amp;t=m&amp;ll=22.459978,91.971016&amp;spn=0.038074,0.054932&amp;z=14&amp;output=embed"></iframe><br />
	
</td>
	
<?php
	include("includes/footer.php");
	?>	