<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM services_page  WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>