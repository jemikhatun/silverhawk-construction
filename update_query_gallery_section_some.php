<?php
include 'db_connect.php';

$id=  $_GET['id'];
$gallery_heading = $_POST['gallery_heading'];
$gallery_button = $_POST['gallery_button'];


$gallery_some_update= "UPDATE gallery_section_some SET gallery_heading='$gallery_heading',gallery_button='$gallery_button' WHERE id=$id";
 mysqli_query($dbconnect,$gallery_some_update);
?>