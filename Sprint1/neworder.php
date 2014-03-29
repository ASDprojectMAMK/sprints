<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="styleneworder.css" rel="stylesheet" type="text/css" />
 
 
</head>

<body>
	<table id="table1" cellspacing="0px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#505050">
			<td height="140px" width="80%" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.url.ph">
					<div id="neworder">
						NEW ORDER
					</div>
				</a>
			</td>
			
			<td height="140px" width="20%"  valign="bottom">
				<div id="menu">
				SUBMIT
				</div>
				
			</td>

		</tr>
		
	</table>
	
	<table id="table2" cellspacing="3px" align="center" valign="center">
		<tr>
			<td width="20%" height="100%">
				<div id="aside">
				</div>
			</td>
		
			<td width="60%">
				<div id="context">
					<form id="contact" method="post" action="">
						<table id="table3">
							<tr>
								<td>
								<label for="name"> First Name </label>
								</td>
								
								<td>
								<input type="text" id="name"/>
								</td>
							</tr>	
							<tr>
								<td>
								<label for="family"> Family Name </label>
								</td>
								
								<td>
								<input type="text" id="family"/>
								</td>
							</tr>	
							<tr>
								<td>
								<label for="address"> Address </label>
								</td>
								
								<td>
								<input type="text" id="address"/>
								</td>
							</tr>	
							<tr>
								<td>
								<label for="email"> E-mail </label>
								</td>
								
								<td>
								<input type="email" id="email"/>
								</td>
							</tr>	
							<tr>
								<td>
								<label for="phone"> Phone </label>
								</td>
								
								<td>
								<input type="text" id="phone" pattern="[0-9]{6,11}"/>
								</td>
							</tr>	
							<tr>
								<td>
								<label for="date"> Date of order </label>
								</td>
								
								<td>
								<input type="text" id="date" placeholder="2014-01-01"/>
								</td>
							</tr>	
							
							<!--<input type="submit" name="submit" id="submit" value="submit" />-->
							<tr>
								<td>
								<label for="items"> Items </label>
								</td>
								<td style="widht:100px">
									<form action="">
										<select name="category">
										<option value="body">Body</option>
										<option value="makeup">Make up</option>
										<option value="parfum">Parfum</option>
										<option value="hair">Hair</option>
										</select>
									</form>
									<form action="">
										<select name="item">
										<option value="milk">milk</option>
										<option value="makeup">Make up</option>
										<option value="parfum">Parfum</option>
										<option value="hair">Hair</option>
										</select>
									</form>
								</td>
							</tr>
							
							<!--<tr>
								<td>
								<label for="items"> Items </label>
								</td>
								<td>
									<form action="">
										<select name="cars">
										<option value="volvo">Body</option>
										<option value="saab">Make up</option>
										<option value="fiat">Parfum</option>
										<option value="audi">Hair</option>
										</select>
									</form>
								</td>
							</tr>-->
						
						</table>
					</form>
				</div>
				
			</td>
			<td width="20%" height="100%">
				<div id="aside">
				
				</div>
				
			</td>
		</tr>
	</table>	
</body>


</html>