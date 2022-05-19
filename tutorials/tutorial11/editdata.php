<?php
session_start();
include('include/connection.php');
$id=(isset($_GET['id'])?$_GET['id']:0);
$machine_name=(isset($_GET['machine_name'])?$_GET['machine_name']:"");
$description_name=(isset($_GET['description']))?$_GET['description']:"");
$sql="";
if($id)
{
    $sql="update table tbl_machine set machine_name='$machine_name',description=$description"; 
}
else
{
    $sql="insert into tbl_machine values ('$machine_name','$description')";
}
$db->query($sql);
if($db->affected_rows)
{
    $_SESSION['message']="success";
}

?>