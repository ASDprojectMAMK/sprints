<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="stylecontacts.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9933FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.url.ph">
					<div id="contacts">
						CONTACTS
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		
		<tr>
			<td width="20%" bgcolor="#d5ddde">
				<div id="aside">
					Delete contact
					<div id="contact-form">
						<form method="get" action="delete_contact.php">
							<fieldset>								
								<label for="FamilyName">Choose family name</label><br>
									<select id="dropdown_menu" name="dd">
										<?php
											require 'connect.php';

											$mysql_select = "SELECT FamilyName FROM customers ORDER BY FamilyName;";
											$result = mysql_query($mysql_select);

											while ($row = mysql_fetch_array($result)) {
														$FamilyName=$row["FamilyName"];
															echo "<option>
																$FamilyName
															</option>";
														
														}
											while($row = mysql_fetch_array($result));
										?>

		
									</select>
									<br><br>
									
									<input type="submit" name="submit" id="submit" value="Delete" />
							</fieldset>	
						</form>
					</div>
				</div>
				
			</td>
		
			<td width="60%" bgcolor="#d5ddde">
				<div id="context">
					<?php require 'show_all_contacts.php';
					?>
				</div>
				
			</td>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				Add new contact
					<div id="contact-form">
						<form method="get" action="new_contact.php">
							<fieldset>								
								<label for="FamilyName">FamilyName</label><br>
								<input type="text" name="FamilyName"/><br>
								
								<label for="FirstName">FirstName</label><br>
								<input type="text" name="FirstName"/><br>
								
								<label for="OrderId">OrderId</label><br>
								<input type="text" name="OrderId"/><br>
								
								<label for="Address">Address</label><br>
								<input type="text" name="Address"/><br>
								
								<label for="Phone">Phone</label><br>
								<input type="text" name="Phone"/><br>
								
								<label for="Email">E-mail</label><br>
								<input type="text" name="Email"/><br><br>
								
								<input type="submit" name="submit" id="submit" value="Save" />
							</fieldset>
						</form>
					</div>
				</div>
				
			</td>
		</tr>
	</table>	
</body>


</html>