<?php
include 'db_connect.php';

$id=  $_GET['id'];
$random = rand(1111,9999);
$image = 'upload/'. $random . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);

$hover_heading=$_POST['hover_heading'];
$hover_parragraph=$_POST['hover_parragraph'];

$gallery_update= "UPDATE gallery_section SET image='$image',hover_heading='$hover_heading',hover_parragraph='$hover_parragraph' WHERE id=$id";
 mysqli_query($dbconnect,$gallery_update);
?>