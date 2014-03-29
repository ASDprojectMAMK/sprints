<?php
require 'connect.php';
$FamilyName = $_REQUEST['FamilyName'];
$FirstName = $_REQUEST['FirstName'];
$OrderId = $_REQUEST['OrderId'];
$Address = $_REQUEST['Address'];
$Phone = $_REQUEST['Phone'];
$Email = $_REQUEST['Email'];



$mysql_insert = "INSERT INTO customers (FamilyName, FirstName, OrderId, Address, Phone, Email)".
"VALUES('{$FamilyName}','{$FirstName}','{$OrderId}','{$Address}','{$Phone}','{$Email}');";
mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());

header('Location: http://karvanen.url.ph/contacts.php');
?>

