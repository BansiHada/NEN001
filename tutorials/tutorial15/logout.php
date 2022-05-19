<?php
   session_start();
   session_destroy();
   if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
   {
      $email=$_COOKIE['email'];
      $pass=$_COOKIE['password'];
   
      setcookie('email',$email,time()-1);
      setcookie('password',$pass,time()-1);
   }
   header('location:login.php');
   echo 'You have cleaned session';
?>
