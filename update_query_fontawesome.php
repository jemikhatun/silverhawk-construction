<?php
include 'db_connect.php';

$id=  $_GET['id'];

$icon1 = $_POST['icon1'];
$icon2 = $_POST['icon2'];
$icon3 = $_POST['icon3'];
$sql1= "UPDATE fontawesome SET icon1='$icon1',icon2='$icon2',icon3='$icon3' WHERE id=$id";
 mysqli_query($dbconnect,$sql1);
?>