<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete= "DELETE FROM gallery_section_some  WHERE id=$id";
mysqli_query($dbconnect,$delete);
?>