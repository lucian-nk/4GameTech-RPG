<?php
$link = mysql_connect('localhost', 'u85934db1', '123456') or die("Nu se poate efectua conexiunea MYSQL");
mysql_select_db('u85934db1', $link);

$dbh = new PDO('mysql:host=localhost;dbname=u85934db1;charset=utf8', 'u85934db1', '123456');


?>