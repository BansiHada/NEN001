<?php
session_start();
include("include/connection.php");
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT fullname,firstname,lastname,email,password,contact,birthday,gender,passno,registerby,status,photo FROM members where id = $id";
$result = $conn->query($sql);
if ($result->num_rows) {
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutorial-15</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tutorial_15</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href=index.php>Home</a></li>
      <li><a href="logout.php">Logout</a></li>
      
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</br>
<div class="container">
<div class="row">
    <div class="col-lg-10">
      
    </div>
</div>
<form method="post" action="savedata.php"  enctype="multipart/form-data">
 
<div class="row">
    <div class="col-lg-12">

          <div class="form-group">
            <div class="form-floating mb-3">
                  <input type="hidden" name="id" value="<?= $id ?>"></input>

              <input type="text" class="form-control" name="fullname" 
              value="<?=isset($row['fullname'])?$row['fullname']:""?>" >
              <label for="floatingInput">Enter Full Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="firstname"value="<?= isset($row['firstname']) ? $row['firstname'] : "" ?>" >
              <label for="floatingInput">Enter First Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="lastname" value="<?= isset($row['lastname']) ? $row['lastname'] : "" ?>">
              <label for="floatingInput">Enter Last Name</label>
            </div>
            
            
            <div class="form-floating">
              <input type="email" class="form-control" name="email" value="<?= isset($row['email']) ? $row['email'] : "" ?>">
              <label for="floatingPassword">Enter Email</label>
            </div>
            <div class="form-floating mt-3">
              <input type="password" class="form-control"  name="password" value="<?= isset($row['password']) ? $row['password'] : "" ?>">
              <label for="floatingInput">Enter Password</label>
            </div>
            
            <div class="form-floating mt-3">
                <input type="number" class="form-control"  name="contact" value="<?= isset($row['contact']) ? $row['contact'] : "" ?>">
                <label for="floatingInput">Enter Contact</label>
              </div>
              <div class="form-floating mt-3">
                <input type="date" class="form-control" name="bday" value="<?= isset($row['bday']) ? $row['bday'] : "" ?>">
                <label for="floatingInput">Enter BirthDate</label>
              </div>

              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="gender" value="<?= isset($row['gender']) ? $row['gender'] : "" ?>">
                <label for="floatingInput">Enter Gender</label>
              </div>
              
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="passno" value="<?= isset($row['passno']) ? $row['passno'] : "" ?>">
                <label for="floatingInput">Enter Passno</label>
              </div>
              
              
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="rby" value="<?= isset($row['rby']) ? $row['rby'] : "" ?>">
                <label for="floatingInput">Register By</label>
              </div>

              
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="status" value="<?= isset($row['status']) ? $row['status'] : "" ?>">
                <label for="floatingInput">Enter Status</label>
              </div>
              <div class="form-floating mt-3">
                <input type="file" class="form-control" name="profile" value="<?= isset($row['profile']) ? $row['profile'] : "" ?>">
                
                <label for="floatingInput">Enter Profile</label>
              </div><br/>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
              
              </div>
          </div>

  
</form>
</body>
</html>