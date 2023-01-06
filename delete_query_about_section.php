<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM about_page  WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>