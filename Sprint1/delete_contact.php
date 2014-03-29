<?php
require 'connect.php';
$FamilyName = $_REQUEST['FamilyName'];
$deleteSQL = "DELETE FROM customers WHERE FamilyName = '$FamilyName'";
mysql_query($deleteSQL);

header('Location: http://karvanen.url.ph/contacts.php');
?>


