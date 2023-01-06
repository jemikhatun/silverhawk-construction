<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM fontawesome WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>