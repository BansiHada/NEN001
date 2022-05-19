<?php
session_start();
if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
	$email=$_COOKIE['email'];
	$pass=$_COOKIE['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutorial 15</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style></style>
</head>
<body>
  <div class="col-md-4 mb-4">
  <div class="container">
	<form action="validate.php" method="post">
	<div class="form-group">
  <label class="form-label mt-4">Login Form</label>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="bansi@gmail.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="admin123">
    <label for="floatingPassword">Password</label>
  </div><br/>
<input type="submit" class="btn btn-success" name="submit" value="submit">
</div>
</div>

	</form>
</div>
</body>
</html>