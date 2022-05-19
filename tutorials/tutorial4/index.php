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
    <form action="result.php" method="get" name="myForm" onsubmit="return validateForm()">
        <div class="formgroup">
            <label for="principal">Principal:</label>
            <input type="number" name="principal" id="principal" class="form-control" required>
        </div>
        <div class="formgroup">
        <label for="rateofinterest">Rate of interest:</label>
        <input type="number" name="rateofinterest" id="rateofinterest" class="form-control" required>
        </div>
        <div class="formgroup">
        <label for="noy">No. of years:</label>
        <input type="number" name="noy" id="noy"  class="form-control" required>
        </div>
        <div class="formgroup mt-3">
            <input type="submit" onclick="IsEmpty();" value="Calculate" class="btn btn-danger">
        </div>
    </form>
</div>
</div>    
</body>
</html>
<script type="text/javascript">
    function validateForm() {
         var y = document.getElementById("myDIV");
  var x = document.forms["myForm"]["principal"].value;
  if (x == "") {
    y.style.display = "block";
    return false;
    else
        y.style.display = "none";
  }
}

</script>