<?php
  include 'db_connect.php';

  $view_footer="SELECT * FROM `footer_section`"; 
  $result_footer = mysqli_query($dbconnect,$view_footer );
  $footer_section_data = mysqli_fetch_assoc( $result_footer);
  
?>