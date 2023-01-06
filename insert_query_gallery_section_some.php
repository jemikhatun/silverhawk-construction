<?php
include 'db_connect.php';

$gallery_heading = $_POST['gallery_heading'];
$gallery_button = $_POST['gallery_button'];


$insert_gallery="INSERT INTO `gallery_section_some`(`id`, `gallery_heading`, `gallery_button`) VALUES ('NULL','$gallery_heading','$gallery_button')";

mysqli_query($dbconnect,$insert_gallery);

?>