<?php
include 'db_connect.php';

$id=  $_GET['id'];

$caption_heading = $_POST['caption_heading'];
$small_heading = $_POST['small_heading'];
$caption_parragraph = $_POST['caption_parragraph'];
$button1= $_POST['button1'];
$button2= $_POST['button2'];

$caption_update= "UPDATE slider_section_caption SET caption_heading='$caption_heading',small_heading='$small_heading',caption_parragraph='$caption_parragraph', button1='$button1',button2='$button2' WHERE id=$id";
 mysqli_query($dbconnect,$caption_update);
?>