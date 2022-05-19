<?php
	session_start();
	include("include/connect.php");
	$username= $_POST['username'];
	$password= $_POST['password'];
	$rememberme = isset($_POST["rememberme"])?$_POST["rememberme"]:"";
		
	$sql = "select * from users where username='$username' and password='$password'";
	$result = $db->query($sql);

	if($result->num_rows > 0){
		// If at least one record receve then below code will be execute 
		$row = $result->fetch_assoc();
		$username = $row['username'];
		$category = $row['category'];
		$first_name = $row['first_name'];
		
		$_SESSION["username"] = $username;
		$_SESSION["first_name"] = $first_name;
		$_SESSION["category"] = $category;

		header("location:index.php");
	}else{
		header("location:login.php");
	}
