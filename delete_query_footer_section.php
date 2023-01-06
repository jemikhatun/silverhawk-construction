<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM footer_section WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>