<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM top_header WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>