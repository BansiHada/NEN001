<?php
	$db = new mysqli('localhost','root','','rku_ce423_cie1');
	
	if($db->connect_errno){
		echo $db->connect_error;
		die('Sorry, Database connection error.');
	}
?>