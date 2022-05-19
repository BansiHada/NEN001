<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="index.php">Library Management</a>
	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" >Books</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" >Issue</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" >Users</a>
			</li>
			<li class="nav-item">
				<!-- Logout Link-->
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<span style="float:right;color:white"><b>Last Visited Date : <?php echo isset($_COOKIE['lastdate']);?></b></span>
</nav>