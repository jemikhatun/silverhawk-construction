<?php
include 'db_connect.php';

$id= $_GET['id'];
$random = rand(1111,9999);
$logo = 'upload/'. $random . $_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
$icon1 = $_POST['icon1'];
$icon2 = $_POST['icon2'];
$icon3 = $_POST['icon3'];
$footer_sql= "UPDATE footer_section SET logo='$logo',icon1='$icon1',icon2='$icon2',icon3='$icon3' WHERE id=$id";
 mysqli_query($dbconnect,$footer_sql);
?>