<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    <form action="result.php" method="post" name="myForm" >
        <div class="formgroup mt-3">
       <center> <h1><label for="cars">Choose a Digit for appropriate month name</label></h1></center>
    <select name="months[]"  class="form-select form-select-lg mb-3">
    <option value="January">1</option>
    <option value="February">2</option>
    <option value="March">3</option>
    <option value="April">4</option>
    <option value="March">5</option>
    <option value="June">6</option>
    <option value="July">7</option>
    <option value="August">8</option>
    <option value="September">9</option>
    <option value="October">10</option>
    <option value="November">11</option>
    <option value="December">12</option></select>
</div>
<div class="formgroup mt-3">
            <input type="submit" name="formsubmit" value="Print month" class="btn btn-danger">
        </div>
 
</select>
</div>
</form>
</div>
</div>
</body>
</html>
