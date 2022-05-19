<?php
session_start();
include('include/connection.php');
$id = isset($_POST['id']) ? $_POST['id'] : 0;
echo $id;
$full_name = isset($_POST['fullname']) ? $_POST['fullname'] : "";
$first_name = isset($_POST['firstname']) ? $_POST['firstname'] : "";
$last_name = isset($_POST['lastname']) ? $_POST['lastname'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$number = isset($_POST['contact']) ? $_POST['contact'] : "";
$bday = isset($_POST['bday']) ? $_POST['bday'] : "";
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$passno = isset($_POST['passno']) ? $_POST['passno'] : "";
$rby = isset($_POST['rby']) ? $_POST['rby'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "";
$photo = isset($_POST['photo']) ? $_POST['photo'] : "";
$sql = "";
if ($id) {
    $sql = "UPDATE members SET 
    fullname = '$full_name',
    firstname='$first_name',
    lastname='$last_name',
    email='$email',
    password='$password',
    contact='$number',
    birthday='$bday',
    gender='$gender',
    passno='$passno',
    registerby='$rby',
    status='$status',
    photo='$photo'
    where id = $id";
} else {
    $sql = "INSERT INTO members (fullname,firstname,lastname,email,password,contact,birthday,gender,passno,registerby,status,photo) values('$full_name','$first_name','$last_name','$email','$password','$number','$bday','$gender','$passno','$rby','$status','$photo')";
}

$conn->query($sql);

header("location:index.php");
