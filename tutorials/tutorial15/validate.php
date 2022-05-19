<?php
session_start();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
   
    if($email == "bansi@gmail.com" and $pass == "admin123")
    {
        if(isset($_POST['remember']))
        {
            setcookie('email',$email,time()+60*60*7);
            setcookie('password',$pass,time()+60*60*7);
            
        }
         $_SESSION['email']=$email;
        header("location:index.php");
       
       

    }
    else{
        echo "<script>alert('Please Enter Valid Details!!!')</script>";
        echo '<script>window.location.href="login.php"</script>';
        //header("location:login.php");

    }

}
else
{
    header("location:login.php");
}
?>

    