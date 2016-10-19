<?php
session_start();
include "conn.php";
	
	$username = mysql_real_escape_string($_GET['username']);
	$password = mysql_real_escape_string($_GET['password']);
	$token = mysql_real_escape_string($_GET['OneSignalID']);
	
	$sql = "SELECT * FROM person WHERE username = '".$username."' 
	and password = '".$password."'";
	$query = mysql_query($sql);
	$result = mysql_fetch_array($query);
	if(!$result)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			echo "Correct";
			
			$updatToken = mysql_query("update person set token='".$token."' where Person_ID='".$result['Person_ID']."' ");
	}
	

	
			
	mysql_close();
?>