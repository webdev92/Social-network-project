<?php
$con = mysql_connect('127.0.0.1','junior','');
if(!$con){
	die( mysql_error());
	}
mysql_select_db("db_one",$con);

?>