
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
@keyframes animtext { 
  from {
      width: 0;
     transition: all 2s ease-in-out;
  } 
}</style>
<div class="container">
	<div class="row">
<?php
$p= $_GET['principal']; 
$n= $_GET['noy'];
$r=$_GET['rateofinterest'];
$interest=$p*$r*$n/100;
echo "<h1>Interest is:".$interest."</h1>";
?>
</div>
</div>