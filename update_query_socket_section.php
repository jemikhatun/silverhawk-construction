<?php
include 'db_connect.php';

$id=  $_GET['id'];

$parragraph=$_POST['parragraph'];
$link=$_POST['link'];
$socket_update= "UPDATE soket_section SET parragraph='$parragraph',link='$link' WHERE id=$id";
 mysqli_query($dbconnect,$socket_update);
?>