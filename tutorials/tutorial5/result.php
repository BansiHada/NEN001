<style>
	h1{
     color: black; 
  font-family: "arial";
  font-size: 3em;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 100%;
  animation: animtext 4s steps(80, end); 
   transition: all cubic-bezier(0.1, 0.7, 1.0, 0.1);
}
b{
     color: red; 
  
}
@keyframes animtext { 
  from {
      width: 0;
     transition: all 2s ease-in-out;
  } 
}</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<style>
</style>
<body>
<div class="container mt-5">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
<?php
#echo"<pre>";
#print_r($_POST);
#echo"</pre>";
if(isset($_POST['formsubmit'])){
    if(!empty($_POST['months'])) {
      foreach($_POST['months'] as $selected){
       echo '<center><h1><div class="w3-animate-zoom">Your selected Month Is: '. '<b>'.$selected.'</b>'.'</div></h1></center>';
      }          
    } 
  }
?>
</div>
</div>
</body>
</html>


