<?php
include_once("dbconnect.php");
$username = $_POST['id'];
$pass = $_POST['password'];

$sql = " SELECT count(*) FROM persons WHERE ( id ='".$username."' and password='".$pass."')";


$qury = mysql_query($sql);

$result = mysql_fetch_array($qury);

if($result[0]>0){
	
session_start();
$_SESSION['username'] = $username;
$_SESSION['pass'] = $pass;
header("location:home.php");
} else {
	header("location:login.php");
	}


?>