<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM contant_bit WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>