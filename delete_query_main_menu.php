<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM main_menu WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>