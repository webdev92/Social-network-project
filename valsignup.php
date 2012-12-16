<?php
if(empty($_POST['id']) || empty($_POST['fname']) || empty($_POST['password'])){
	    header("location:signup.php");
	} else {
		 $con = mysql_connect('127.0.0.1','junior','');
		 if(!$con){
			 die ( mysql_error());
			 } else {
				 echo "connected" + "<br />";
				 }
		mysql_select_db("db_one",$con);
		$query = "SELECT * FROM persons WHERE id = '$_POST[id]'";
 
        $result = mysql_query($query);
 
            if (mysql_num_rows($result) == 1 ){
    echo 'Username already exists';  } else {
		$insert = " INSERT INTO persons ( id,fname,password ) VALUES ( '$_POST[id]','$_POST[fname]','$_POST[password]')";
		
		if(!mysql_query($insert,$con)){
			echo 'error' . mysql_error();
			} else {
			header("location:login.php");
			}
		}
	}
?>