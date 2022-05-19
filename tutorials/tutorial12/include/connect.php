<?php
$db = new mysqli('sql111.epizy.com', 'epiz_30734380', 'P3oWuRyYUX0Hx', 'epiz_30734380_tutorial12');

if ($db->connect_errno) {
    echo $db->connect_error;
    echo ('Sorry, Database connection error.');
} else {
    $message = "You have connected SuccessFully.";
}
?>