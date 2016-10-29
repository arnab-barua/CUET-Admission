<?php
	include("includes/header.php");
?>
	
<td id="page">
	<?php
		$query = "SELECT visibility FROM pages WHERE PageNo=5";
		$result = $db->query($query);
		$row = $result->fetch_assoc();
		
		if($row["visibility"]==0)
			echo "Admission circulation is not published yet";
		else{	
	?>
	<h2 align="center"><font color="#000000"><b><u>APPLICATION FORM-2013</u></b></h2>
	<h4 align="left"><font color="black">
	<form action="process.php" method="post">
		<table align="center">
			<tr>
				<td align="left"><b>Name</b></td>
				<td>:&nbsp;<input type="text" name="sname" size="30"/> </td>
				</tr>
				<tr>
					<td align="left"><b>Father's Name</b></td>
					<td>:&nbsp;<input type="text" name="sfname" size="30"/> </td>
				</tr>
				<tr>
					<td align="left"><b>Mother's Name</b></td>
					<td>:&nbsp;<input type="text" name="smname" size="30"/> </td>
				</tr>
				<tr>
					<td align="left"><b>Sex</b></td>
					<td>:<input type="radio" name="sex" value="male">Male</td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;<input type="radio" name="sex" value="female">Female</td>
				</tr>
				<tr>
					<td align="left"><b>Date Of Birth</b></td>
					<td>:&nbsp;<select name="btdate">  
							<option value="dd">dd</option>
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
							<option value="6">06</option>
							<option value="7">07</option>
							<option value="8">08</option>
							<option value="9">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>	
						</select>
						<select name="bmonth">
							<option value="mm">mm</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Aug</option>
							<option value="9">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>
						<select name="byear">
							<option value="yyyy">yyyy</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left"><b>Nationality</b></td>
					<td>:&nbsp;<input type="text" name="snation" size="30"/> </td>
				</tr>
			</table>
			<h3 align="center"><font color="4169E1">Contact Information</h3>
			<table align="center" cellspacing="1" cellpadding="6">
				<tr>
					<td align="left"><b>Permanent Address</b></td>
					<td>&nbsp;<textarea name="speraddress" rows="5" cols="50"/></textarea></td>
				</tr>
				<tr>
					<td align="left"><b>Present Address</b></td>
					<td>&nbsp;<textarea name="spreaddress" rows="5" cols="50"/></textarea></td>
				</tr>
				<tr>
					<td align="left"><b>Contact Number</b></td>
					<td>&nbsp;<input type="text" name="smobnumber" size="30" maxlength="11"/></td>
				</tr>
				<tr>
					<td align="left"><b>Email</b></td>
					<td>&nbsp;<input type="text" name="semail" size="30"/> </td>
				</tr>
			</table>
			
			<h3 align="center"><font color="4169E1">Education Background</h3>
			<table border="6" bordercolor="#F4A460" align="center" cellspacing="1" cellpadding="6">
				<tr bgcolor="#008080">
					<th rowspan="2">Exam</th>
					<th rowspan="2">Board</th>
					<th rowspan="2">Year</th>
					<th rowspan="2">Roll</th>
					<th rowspan="2">GPA</th>
					<th colspan="4">Grade</th>
				</tr>
				<tr bgcolor="#66CDAA">
					<th><font color="#000033">English</font></th>
					<th><font color="#000033">Physics</font></th>
					<th><font color="#000033">Chemistry</font></th>
					<th><font color="#000033">Math</font></th>
				</tr>
				<tr>
					<td bgcolor="#48D1CC"><font color="#000033">SSC</font></td>
					<td><select name="sscboard">
						<option value="barisal">Barisal</option>
						<option value="chittagong">Chittagong</option>
						<option value="comilla">Comilla</option>
						<option value="dhaka">Dhaka</option>
						<option value="dinajpur">Dinajpur</option>
						<option value="jessore">Jessore</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="sylhet">Sylhet</option>
						</select>
					</td>
					<td><select name="sscyear">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						</select>
					</td>
					<td><input type="text" name="sscroll" size="7" maxlength="6"/></td>
					<td><input type="text" name="sscgpa" size="7" maxlength="6"/></td>
					<td><h5><font color="green">* Not required</td>
					<td><h5><font color="green">* Not required</td>
					<td><h5><font color="green">* Not required</td>
					<td><h5><font color="green">* Not required</td>
					</font>
				</tr>
				
				<tr>
					<td bgcolor="#48D1CC"><font color="#000033">HSC</font></td>
					<td><select name="hscboard">
						<option value="barisal">Barisal</option>
						<option value="chittagong">Chittagong</option>
						<option value="comilla">Comilla</option>
						<option value="dhaka">Dhaka</option>
						<option value="dinajpur">Dinajpur</option>
						<option value="jessore">Jessore</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="sylhet">Sylhet</option>
						</select>
					</td>
					<td><select name="hscyear">
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						</select>
					</td>
					<td><input type="text" name="hscroll" size="7" maxlength="6"/></td>
					<td><input type="text" name="hscgpa" size="7" maxlength="6"/></td>
					<td bgcolor="#66CDAA"><select name="hsceng">
						<option value="5">A+</option>
						<option value="4">A</option>
						<option value="3.5">A-</option>
					</td>
					<td bgcolor="#66CDAA"><select name="hscphy">
						<option value="5">A+</option>
						<option value="4">A</option>
						<option value="3.5">A-</option>
					</td>
					<td bgcolor="#66CDAA"><select name="hscche">
						<option value="5">A+</option>
						<option value="4">A</option>
						<option value="3.5">A-</option>
					</td>
					<td bgcolor="#66CDAA"><select name="hscmath">
						<option value="5">A+</option>
						<option value="4">A</option>
						<option value="3.5">A-</option>
					</td>
				</tr>
				</font>
			</table></br></br>
						<h3><font color="red">
						<table align="center">
							<tr>
								<td align="right"><input type="checkbox" name="submi">&nbsp;&nbsp;</td>
								<td><h3><b><i><u><font color="white">Ihereby declare that information mentioned above are right.</br>
								If any information proves as wrong in future, than i will any punishment.</h3></b></i></u></font></td>
							</tr>
						</table></br></br>
						<table align="center">
							<tr>
								<td align="left"><input type="reset" value="RESET"></td>
								<td align="right"><input type="SUBMIT" value="SUBMIT"></td>
							</tr>	
						</table>	
					</form>
	<?php }
	?>
<?php
	include_once("includes/footer.php");
?>