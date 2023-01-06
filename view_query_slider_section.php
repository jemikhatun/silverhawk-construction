<?php
include 'db_connect.php';

$view_slider_image="SELECT * FROM `slider_section_imagee`"; 
$slider_image_result = mysqli_query($dbconnect,$view_slider_image);
$slider_image_show = mysqli_fetch_assoc($slider_image_result );
?>
<?php
  include 'db_connect.php';

  $view_caption ="SELECT * FROM `slider_section_caption`"; 
  $caption_result = mysqli_query($dbconnect,$view_caption );
  $caption_show= mysqli_fetch_assoc( $caption_result);
  
?>