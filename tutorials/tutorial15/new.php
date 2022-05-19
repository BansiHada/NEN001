<?php
session_start();
include('include/connection.php');
$display = $conn->query("
SELECT * FROM members");

if(!isset($_SESSION['email']))
{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<div class="container">
<div class="row">
    <div class="col-lg-10">
        <h2> Member Data </h2>
    </div>

    <div class="col-lg-2">
    <a href="form.php" class="btn btn-success">Add Member</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
          <?php
              if (mysqli_num_rows($display)) {
                  while ($row = $display->fetch_assoc()) { 
                    
                    ?>
             
  <tbody>
    <tr class="table-active">
      <th scope="row">
        <?= $row['id']; ?></th>
      
      <td><?= $row['fullname']; ?></td>
      
      <td><?= $row['email']; ?></td>
     <td>
      <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')"><span class="badge rounded-pill bg-danger">Delete</span></a>
      <a href="form.php?id=<?= $row['id']; ?>"><span class="badge rounded-pill bg-warning">Edit</span></a>
      </td>
                </tbody>
    </tr>
    <?php }
            } ?>
</table>
</div>
</div> 
</div>
</body>
</html>

</body>
</html>

