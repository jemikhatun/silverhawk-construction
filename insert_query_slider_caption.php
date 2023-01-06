<?php
include 'db_connect.php';

$caption_heading = $_POST['caption_heading'];
$small_heading = $_POST['small_heading'];
$caption_parragraph = $_POST['caption_parragraph'];
$button1= $_POST['button1'];
$button2= $_POST['button2'];


$caption_insert="INSERT INTO `slider_section_caption`(`id`, `caption_heading`, `small_heading`,`caption_parragraph`,`button1`,`button2`) VALUES ('NULL','$caption_heading', '$small_heading','$caption_parragraph','$button1','$button2')";

mysqli_query($dbconnect,$caption_insert);
    

?>