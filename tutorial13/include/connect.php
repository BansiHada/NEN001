<?php
	$db = new mysqli('localhost','root','','rkuniversity');
	
	if($db->connect_errno){
		echo $db->connect_error;
		die('Sorry, Database connection error.');
	}
?>