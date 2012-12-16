<?php
if(!empty($_POST['post'])){
	$con = mysql_connect('127.0.0.1','junior','');
	    if(!$con){
			die( 'Error:' . mysql_error());
			}
			mysql_select_db("db_one",$con);
			$posts = "INSERT INTO chat_table ( post ) VALUES ('$_POST[post]')";
			if(mysql_query($posts)){
				{
					session_start();
					$_SESSION['status'] = $_POST['post'];
				header("location:chat.php");
					}
				}
	} else {
		echo 'error';
		}
		$a = 0;
		 echo ~$a;
?>