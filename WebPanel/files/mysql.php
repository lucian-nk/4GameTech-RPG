<?php
include_once("config.php");
mysql_connect("$db_host","$db_username","$db_pass") or die(mysql_error());
mysql_select_db("$db_name") or die("Unable to select database. Be sure the databasename exists and online is.");
?>