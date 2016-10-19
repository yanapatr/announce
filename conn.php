<?php
	$conn = mysql_connect('localhost','root','eaui1234');
	mysql_select_db("aui");
	if(!$conn){
		die('Could not connect'. mysql_error());
	}
	
	mysql_close($conn);
?>