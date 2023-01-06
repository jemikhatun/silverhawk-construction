<?php
include 'db_connect.php';

$id=  $_GET['id'];

$parragraph=$_POST['parragraph'];
$number_url=$_POST['number_url'];
$contact_update= "UPDATE contant_bit SET parragraph='$parragraph',number_url='$number_url' WHERE id=$id";
 mysqli_query($dbconnect,$contact_update);
?>