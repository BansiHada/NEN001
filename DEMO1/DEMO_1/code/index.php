<?php
session_start();
require "include/connect.php";
//Write Session Management Code

$username= isset($_SESSION["username"]);
$currentdate = date('d/m/Y H:i:s');
//Cookie code goes here
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery.min.js"></script>
	<style>
</style>
</head>
<body>
	<?php include("nav.php"); ?>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary">
					<div class="card-header">
						<h3>
							<?php echo "Welcome, ";?>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<div class="text-white bg-primary">
					<div class="card-header">Users</div>
					<div class="card-body">
						<h4 class="card-title">Total No of Users :</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class=" text-white bg-primary">
					<div class="card-header">Books</div>
					<div class="card-body">
						<h4 class="card-title">Total No of Books :</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>