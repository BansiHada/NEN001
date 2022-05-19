<?php
    session_start();
    include('include\connection.php');
    $id=isset($_GET['id'])?$_GET['id']:0;
    $sql="delete from tbl_machine where id=$id";
    $result=$db->query($sql);
    if($db->affected_rows)
    {
    $_SESSION['deletemessage']="record deleted";
    } 
    header("location:index.php");
?>
