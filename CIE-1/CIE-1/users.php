<?php
session_start();
require "db/connect.php";

if(!isset($_SESSION["username"]) && $_SESSION["username"]==null){
	header("location:login.php");
}
$username= $_SESSION["username"];
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
		<h3>Student Management</h3>
		<table class="table">
			<tr>
				<th>Sr.</th>
				<th> Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Category</th>
				<th>Action</th>
			</tr>
			<?php
			if($result = $db->query("select * from users")){
				if($result->num_rows){
					$count=1;
					while($row = $result->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $count++; ?></td>
				
							<td style="text-transform:uppercase";>
							<?php echo $row['fname']?>
							<?php echo $row['lname']?>
					
						</td>
			

							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['category']; ?></td>
							<td>
								<a href="">Edit</a>
								<a href="">Delete</a>
							</td>
						</tr>
						<?php
					}
				}
			}
			?>
		</table>
	</div>
</body>

</html>