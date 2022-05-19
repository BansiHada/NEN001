<?php 
    include('connect.php');
    $id=$_GET['id'];
    $query="delete from tbl_ipmp where id=".$id;
    if ($db->query($query) === TRUE) {
        echo "delete successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('location:index.php');
?>