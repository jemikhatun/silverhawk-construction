<?php
  include 'db_connect.php';

  $view ="SELECT * FROM `top_header`"; 
  $result = mysqli_query($dbconnect,$view );
  $data = mysqli_fetch_assoc( $result);
  //var_dump($data);
?>