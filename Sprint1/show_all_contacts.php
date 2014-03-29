<?php
require 'connect.php';
$mysql_select = "SELECT * FROM customers";
$result = mysql_query($mysql_select);
$row = mysql_fetch_array($result);
do{
$FamilyName = $row['FamilyName'];
$FirstName = $row['FirstName'];
$OrderId = $row['OrderId'];
$Address = $row['Address'];
$Phone = $row['Phone'];
$Email = $row['Email'];

printf("<p>%s,%s,%s,%s,%s,%s</p>",$FamilyName,$FirstName,$OrderId,$Address,$Phone,$Email);	
}
while($row = mysql_fetch_array($result));

?>
