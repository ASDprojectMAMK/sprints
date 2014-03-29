<?php
mysql_connect("mysql.hostinger.ru","u701279442_me","qwerty")
or die ("<p>Error in connection to the database " .mysql_error()."</p>");
mysql_select_db("u701279442_orif")
or die ("<p>Error of choosing the database " .mysql_error(). "</p>");
?>