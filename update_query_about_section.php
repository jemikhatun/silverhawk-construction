<?php
include 'db_connect.php';

$id=  $_GET['id'];

$random = rand(1111,9999);
$image = 'upload/'. $random . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$heading = $_POST['heading'];
$parragraph = $_POST['parragraph'];

$about_section_update= "UPDATE about_page SET image='$image', heading='$heading', parragraph='$parragraph' WHERE id=$id";
 mysqli_query($dbconnect,$about_section_update);
?>