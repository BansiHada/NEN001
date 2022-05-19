<?php
session_start();
include('connection.php');
$display = $conn->query("SELECT
d.department_id, d.department_name, 
d.manager_id, e.first_name 
FROM departments d 
INNER JOIN employees e 
ON (d.manager_id = e.employee_id);");


?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Tutorial-14</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
	

    
</head>

<body>
    <div class="container mx-auto" style="margin-top: 8%;">
        <h2 style="margin-bottom: 2%; text-align:center;">Tutorial-14</h2>
    
        <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-dark">
                            <thead>
                                <tr class="bg-dark">
                                    <th>Department Id</th>
                                    <th>Department Name</th>
                                    <th>Managar Id</th>
                                    <th>First Name</th>
                                    
                                </tr>
                            </thead>
            <?php
            if (mysqli_num_rows($display)) {
                while ($row = $display->fetch_assoc()) { ?>
                    <tr class="bg-success">
                        <td scope="col"><?= $row['department_id']; ?></td>
                        <td scope="col"><?= $row['department_name']; ?></td>
                        <td scope="col"><?= $row['manager_id'] ?></td>
                        <td scope="col"><?= $row['first_name'] ?></td>
                        
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
        </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

<?php
include('connection.php');
$display = $conn->query("
SELECT DEPARTMENT_NAME , 
COUNT(*) AS 'No of Employees' 
FROM departments 
INNER JOIN employees 
ON employees.department_id = departments.department_id 
GROUP BY departments.department_id, department_name 
ORDER BY department_name;" );


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mx-auto" style="margin-top: 8%;">
    
        <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-dark">
                            <thead>
                                <tr class="bg-dark">
                                
                                    <th>Department Name</th>
                                    <th>No Of Employees</th>
                                
                                    
                                </tr>
                            </thead>
            <?php
            if (mysqli_num_rows($display)) {
                while ($row = $display->fetch_assoc()) { ?>
                    <tr class="bg-success">
                        

                        <td scope="col"><?= $row['DEPARTMENT_NAME']; ?></td>
                        <td scope="col"><?= $row['No of Employees']; ?></td>
                         
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
        </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
