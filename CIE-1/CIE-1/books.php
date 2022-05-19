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
		<br/>
		<a href="books_form.php" class="btn btn-danger"> Add New Book </a>
		<div class="row">
			<div class="col-lg-9">
				<h2>Book Management</h2>
			</div>
		</div>
		<table  class="table">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Created</th>
				<th>Action</th>
			</tr>

			<?php
			if($result = $db->query("select * from books where price < 250 ")){
				if($result->num_rows){
					$count=1;
					while($row = $result->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $count++; ?></td>

							<td><?php echo $row['title']?></td>
							<td><?php echo $row['author']?></td>
			

							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['stock']; ?></td>
							<td><?php echo $row['datetime']; ?></td>
						
						
	
							
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