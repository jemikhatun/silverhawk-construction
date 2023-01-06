<?php
include 'db_connect.php';
$id=  $_GET['id'];
$delete_caption= "DELETE FROM slider_section_caption WHERE id=$id";
mysqli_query($dbconnect,$delete_caption);
?>