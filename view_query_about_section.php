<?php
  include 'db_connect.php';

  $view_about ="SELECT * FROM `about_page`"; 
  $result_about = mysqli_query($dbconnect,$view_about );
  $about_section_data = mysqli_fetch_assoc( $result_about);
  
?>