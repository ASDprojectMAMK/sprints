<?php
require 'connect.php';
$Name = $_REQUEST['Name'];
$Price = $_REQUEST['Price'];
$Category = $_REQUEST['Category'];
$Photo = $_REQUEST['Photo'];
$Description = $_REQUEST['Description'];

$mysql_insert = "INSERT INTO items (Name, Price, Category, Photo, Description)".
"VALUES('{$Name}','{$Price}','{$Category}','{$Photo}','{$Description}');";
mysql_query($mysql_insert) or die ("<p>Error of input ".mysql_error());

header('Location: http://kristiina.url.ph/catalogue.php');
?>

