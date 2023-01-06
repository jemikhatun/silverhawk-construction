<?php
  include 'db_connect.php';

  $view ="SELECT * FROM `contant_bit`"; 
  $result = mysqli_query($dbconnect,$view );
  $alldata = mysqli_fetch_assoc( $result);
  
?>