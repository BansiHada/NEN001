<?php
session_start();
include('db/connect.php');
unset($_SESSION['username']);
header('location:login.php');

?>